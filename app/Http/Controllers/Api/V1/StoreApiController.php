<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\StoreLocation;
use App\Services\Store\StoreMaterialSnapshotSynchronizer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class StoreApiController extends Controller
{
    public function __construct(
        private readonly StoreMaterialSnapshotSynchronizer $snapshotSynchronizer,
    ) {}

    public function index(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'search' => ['nullable', 'string', 'max:255'],
            'perPage' => ['nullable', 'integer', 'min:1', 'max:100'],
            'sortBy' => ['nullable', 'string', Rule::in(['id', 'name'])],
            'sortDirection' => ['nullable', 'string', Rule::in(['asc', 'desc'])],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $validated = $validator->validated();
        $query = Store::query()->withCount(['locations', 'materialAvailabilities']);

        if (! empty($validated['search'])) {
            $query->where('name', 'like', '%'.$validated['search'].'%');
        }

        $stores = $query
            ->orderBy($validated['sortBy'] ?? 'name', $validated['sortDirection'] ?? 'asc')
            ->paginate((int) ($validated['perPage'] ?? 25));

        return response()->json([
            'data' => collect($stores->items())
                ->map(fn (Store $store): array => $this->serializeStore($store))
                ->values()
                ->all(),
            'current_page' => $stores->currentPage(),
            'per_page' => $stores->perPage(),
            'total' => $stores->total(),
            'last_page' => $stores->lastPage(),
        ]);
    }

    public function show(int $id): JsonResponse
    {
        $store = Store::query()
            ->with(['locations' => fn ($query) => $query->withCount('materialAvailabilities')->orderBy('id')])
            ->withCount(['locations', 'materialAvailabilities'])
            ->find($id);

        if (! $store) {
            return response()->json([
                'message' => 'Store not found.',
            ], 404);
        }

        return response()->json([
            'data' => [
                ...$this->serializeStore($store),
                'locations' => $store->locations
                    ->map(fn (StoreLocation $location): array => $this->serializeLocation($location))
                    ->values()
                    ->all(),
            ],
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255', 'unique:stores,name'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $store = Store::query()->create($validator->validated());

        return response()->json([
            'message' => 'Store created successfully',
            'data' => $this->serializeStore($store->loadCount('locations')),
        ], 201);
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $store = Store::query()->with('locations')->find($id);

        if (! $store) {
            return response()->json([
                'message' => 'Store not found.',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255', Rule::unique('stores', 'name')->ignore($store->id)],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $store->fill($validator->validated());

        if ($store->isDirty()) {
            $store->save();
            $this->snapshotSynchronizer->syncStore($store->fresh('locations.store'));
        }

        return response()->json([
            'message' => 'Store updated successfully',
            'data' => $this->serializeStore($store->fresh()->loadCount('locations')),
        ]);
    }

    public function destroy(int $id): JsonResponse
    {
        $store = Store::query()->with('locations')->find($id);

        if (! $store) {
            return response()->json([
                'message' => 'Store not found.',
            ], 404);
        }

        foreach ($store->locations as $location) {
            $this->snapshotSynchronizer->detachLocation($location);
        }

        $store->delete();

        return response()->json([
            'message' => 'Store deleted successfully',
        ]);
    }

    /**
     * @return array<string, mixed>
     */
    private function serializeStore(Store $store): array
    {
        return [
            'id' => $store->id,
            'name' => $store->name,
            'location_count' => (int) ($store->locations_count ?? $store->locations()->count()),
            'material_availability_count' => (int) ($store->material_availabilities_count ?? $store->materialAvailabilities()->count()),
            'created_at' => $store->created_at?->toJSON(),
            'updated_at' => $store->updated_at?->toJSON(),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    private function serializeLocation(StoreLocation $location): array
    {
        return [
            'id' => $location->id,
            'store_id' => $location->store_id,
            'address' => $location->address,
            'resolved_address' => $location->resolved_address,
            'city' => $location->city,
            'province' => $location->province,
            'material_availabilities_count' => (int) ($location->material_availabilities_count ?? 0),
        ];
    }
}
