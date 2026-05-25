<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\StoreLocation;
use App\Services\Store\StoreMaterialSnapshotSynchronizer;
use App\Support\Supply\SupplyMaterialRegistry;
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
            'all' => ['nullable', 'boolean'],
            'search' => ['nullable', 'string', 'max:255'],
            'perPage' => ['nullable', 'integer', 'min:1'],
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
        $query = Store::query()
            ->with([
                'locations' => fn ($query) => $query
                    ->withCount('materialAvailabilities')
                    ->withCount($this->resolvedMaterialAvailabilityLocationCountDefinition())
                    ->orderBy('id'),
            ])
            ->withCount(['locations', 'materialAvailabilities'])
            ->withCount($this->resolvedMaterialAvailabilityStoreCountDefinition());

        if (! empty($validated['search'])) {
            $search = $validated['search'];

            $query->where(function ($builder) use ($search): void {
                $builder->where('name', 'like', '%'.$search.'%')
                    ->orWhereHas('locations', function ($locationQuery) use ($search): void {
                        $locationQuery
                            ->where('address', 'like', '%'.$search.'%')
                            ->orWhere('district', 'like', '%'.$search.'%')
                            ->orWhere('city', 'like', '%'.$search.'%')
                            ->orWhere('province', 'like', '%'.$search.'%')
                            ->orWhere('formatted_address', 'like', '%'.$search.'%')
                            ->orWhere('contact_name', 'like', '%'.$search.'%')
                            ->orWhere('contact_phone', 'like', '%'.$search.'%');
                    });
            });
        }

        $query->orderBy($validated['sortBy'] ?? 'name', $validated['sortDirection'] ?? 'asc');

        $all = filter_var($validated['all'] ?? false, FILTER_VALIDATE_BOOLEAN);
        if ($all) {
            $stores = $query->get();
            $total = $stores->count();

            return response()->json([
                'data' => $stores
                    ->map(fn (Store $store): array => $this->serializeStoreIndex($store))
                    ->values()
                    ->all(),
                'current_page' => 1,
                'per_page' => $total,
                'total' => $total,
                'last_page' => 1,
            ]);
        }

        $stores = $query->paginate((int) ($validated['perPage'] ?? 25));

        return response()->json([
            'data' => collect($stores->items())
                ->map(fn (Store $store): array => $this->serializeStoreIndex($store))
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
            ->with([
                'locations' => fn ($query) => $query
                    ->withCount('materialAvailabilities')
                    ->withCount($this->resolvedMaterialAvailabilityLocationCountDefinition())
                    ->orderBy('id'),
            ])
            ->withCount(['locations', 'materialAvailabilities'])
            ->withCount($this->resolvedMaterialAvailabilityStoreCountDefinition())
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
            'material_availability_count' => (int) ($store->resolved_material_availabilities_count ?? $store->material_availabilities_count ?? $store->materialAvailabilities()->count()),
            'created_at' => $store->created_at?->toJSON(),
            'updated_at' => $store->updated_at?->toJSON(),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    private function serializeStoreIndex(Store $store): array
    {
        $locations = $store->locations
            ->map(fn (StoreLocation $location): array => $this->serializeLocation($location))
            ->values();

        $visibleLocations = $locations
            ->groupBy(fn (array $location): string => $this->locationDedupKey($location))
            ->map(function ($group): ?array {
                $primaryLocation = collect($group)
                    ->sort(function (array $left, array $right): int {
                        $scoreCompare = $this->locationQualityScore($right) <=> $this->locationQualityScore($left);

                        if ($scoreCompare !== 0) {
                            return $scoreCompare;
                        }

                        return ((int) ($left['id'] ?? 0)) <=> ((int) ($right['id'] ?? 0));
                    })
                    ->first();

                if (! is_array($primaryLocation)) {
                    return null;
                }

                $primaryLocation['resolved_material_count'] = collect($group)
                    ->sum(fn (array $location): int => (int) ($location['material_availabilities_count'] ?? 0));
                $primaryLocation['deduped_location_ids'] = collect($group)
                    ->map(fn (array $location): int => (int) ($location['id'] ?? 0))
                    ->values()
                    ->all();
                $primaryLocation['has_missing_map_coordinates'] = ! $this->locationHasCoordinates($primaryLocation);

                return $primaryLocation;
            })
            ->filter()
            ->values();

        $missingMapBranchCount = $visibleLocations
            ->filter(fn (array $location): bool => (bool) ($location['has_missing_map_coordinates'] ?? false))
            ->count();

        return [
            ...$this->serializeStore($store),
            'locations' => $locations->all(),
            'primary_location' => $visibleLocations->first(),
            'resolved_material_count' => $visibleLocations->sum('resolved_material_count'),
            'resolved_branch_count' => $visibleLocations->count(),
            'missing_map_branch_count' => $missingMapBranchCount,
            'has_missing_map_coordinates' => $visibleLocations->isEmpty() || $missingMapBranchCount > 0,
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
            'district' => $location->district,
            'resolved_address' => $location->resolved_address,
            'city' => $location->city,
            'province' => $location->province,
            'latitude' => $location->latitude,
            'longitude' => $location->longitude,
            'place_id' => $location->place_id,
            'formatted_address' => $location->formatted_address,
            'contact_name' => $location->contact_name,
            'contact_phone' => $location->contact_phone,
            'material_availabilities_count' => (int) ($location->resolved_material_availabilities_count ?? $location->material_availabilities_count ?? 0),
        ];
    }

    /**
     * @return array<string, \Closure>
     */
    private function resolvedMaterialAvailabilityStoreCountDefinition(): array
    {
        $models = array_values(SupplyMaterialRegistry::models());

        return [
            'materialAvailabilities as resolved_material_availabilities_count' => fn ($query) => $query->whereHasMorph('materialable', $models),
        ];
    }

    /**
     * @return array<string, \Closure>
     */
    private function resolvedMaterialAvailabilityLocationCountDefinition(): array
    {
        $models = array_values(SupplyMaterialRegistry::models());

        return [
            'materialAvailabilities as resolved_material_availabilities_count' => fn ($query) => $query->whereHasMorph('materialable', $models),
        ];
    }

    /**
     * @param  array<string, mixed>  $location
     */
    private function locationDedupKey(array $location): string
    {
        $placeId = strtolower(trim((string) ($location['place_id'] ?? '')));
        if ($placeId !== '') {
            return 'place:'.$placeId;
        }

        $resolvedAddress = strtolower(trim((string) ($location['resolved_address'] ?? '')));
        if ($resolvedAddress !== '') {
            return 'address:'.preg_replace('/\s+/', ' ', $resolvedAddress);
        }

        return 'id:'.(int) ($location['id'] ?? 0);
    }

    /**
     * @param  array<string, mixed>  $location
     */
    private function locationQualityScore(array $location): int
    {
        $score = 0;

        if (filled($location['formatted_address'] ?? null)) {
            $score += 4;
        }
        if (filled($location['address'] ?? null)) {
            $score += 1;
        }
        if (filled($location['city'] ?? null)) {
            $score += 2;
        }
        if (filled($location['province'] ?? null)) {
            $score += 1;
        }
        if ($this->locationHasCoordinates($location)) {
            $score += 3;
        }

        return $score;
    }

    /**
     * @param  array<string, mixed>  $location
     */
    private function locationHasCoordinates(array $location): bool
    {
        return is_numeric($location['latitude'] ?? null) && is_numeric($location['longitude'] ?? null);
    }
}
