<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\MaterialSetting;
use App\Models\Store;
use App\Models\StoreLocation;
use App\Services\Store\StoreMaterialSnapshotSynchronizer;
use App\Support\Supply\SupplyMaterialLabelResolver;
use App\Support\Supply\SupplyMaterialRegistry;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StoreLocationApiController extends Controller
{
    public function __construct(
        private readonly StoreMaterialSnapshotSynchronizer $snapshotSynchronizer,
    ) {}

    public function index(int $storeId): JsonResponse
    {
        $store = Store::query()->find($storeId);

        if (! $store) {
            return response()->json([
                'message' => 'Store not found.',
            ], 404);
        }

        $locations = $store->locations()
            ->withCount('materialAvailabilities')
            ->orderBy('id')
            ->get()
            ->map(fn (StoreLocation $location): array => $this->serializeLocation($location))
            ->values();

        return response()->json([
            'data' => $locations,
        ]);
    }

    public function show(int $storeId, int $locationId): JsonResponse
    {
        $location = $this->resolveLocation($storeId, $locationId);

        if (! $location) {
            return response()->json([
                'message' => 'Store location not found.',
            ], 404);
        }

        return response()->json([
            'data' => $this->serializeLocation($location),
        ]);
    }

    public function store(Request $request, int $storeId): JsonResponse
    {
        $store = Store::query()->find($storeId);

        if (! $store) {
            return response()->json([
                'message' => 'Store not found.',
            ], 404);
        }

        $validator = Validator::make($request->all(), $this->validationRules());

        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $location = $store->locations()->create($validator->validated());

        return response()->json([
            'message' => 'Store location created successfully',
            'data' => $this->serializeLocation($location->loadCount('materialAvailabilities')),
        ], 201);
    }

    public function update(Request $request, int $storeId, int $locationId): JsonResponse
    {
        $location = $this->resolveLocation($storeId, $locationId);

        if (! $location) {
            return response()->json([
                'message' => 'Store location not found.',
            ], 404);
        }

        $validator = Validator::make($request->all(), $this->validationRules());

        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $location->fill($validator->validated());

        if ($location->isDirty()) {
            $location->save();
            $this->snapshotSynchronizer->syncLocation($location->fresh('store'));
        }

        return response()->json([
            'message' => 'Store location updated successfully',
            'data' => $this->serializeLocation($location->fresh()->loadCount('materialAvailabilities')),
        ]);
    }

    public function destroy(int $storeId, int $locationId): JsonResponse
    {
        $location = $this->resolveLocation($storeId, $locationId);

        if (! $location) {
            return response()->json([
                'message' => 'Store location not found.',
            ], 404);
        }

        $this->snapshotSynchronizer->detachLocation($location);
        $location->delete();

        return response()->json([
            'message' => 'Store location deleted successfully',
        ]);
    }

    public function materials(Request $request, int $storeId, int $locationId): JsonResponse
    {
        $location = $this->resolveLocation($storeId, $locationId, true);

        if (! $location) {
            return response()->json([
                'message' => 'Store location not found.',
            ], 404);
        }

        $type = $request->string('type')->toString();
        $family = $type !== '' ? SupplyMaterialRegistry::normalizeFamily($type) : null;

        if ($type !== '' && ! $family) {
            return response()->json([
                'message' => 'Invalid material type.',
            ], 422);
        }

        $grouped = $location->materialAvailabilities
            ->map(function ($availability): ?array {
                $material = $availability->materialable;

                if (! $material instanceof Model) {
                    return null;
                }

                $resolvedFamily = SupplyMaterialRegistry::familyForModel($material::class);

                if (! $resolvedFamily) {
                    return null;
                }

                return [
                    'family' => $resolvedFamily,
                    'item' => [
                        ...$material->toArray(),
                        'family' => $resolvedFamily,
                        'label' => SupplyMaterialLabelResolver::resolve($material),
                    ],
                ];
            })
            ->filter()
            ->groupBy('family')
            ->map(fn ($items) => collect($items)->pluck('item')->sortBy('label')->values()->all());

        $settingsOrder = MaterialSetting::query()
            ->orderBy('display_order')
            ->pluck('material_type')
            ->map(fn (string $materialType): ?string => SupplyMaterialRegistry::normalizeFamily($materialType))
            ->filter()
            ->values()
            ->all();

        $orderedFamilies = collect(array_merge($settingsOrder, array_keys($grouped->all())))
            ->unique()
            ->values();

        $data = $orderedFamilies
            ->map(function (string $resolvedFamily) use ($grouped, $family): ?array {
                if ($family && $resolvedFamily !== $family) {
                    return null;
                }

                $items = $grouped->get($resolvedFamily, []);

                if ($items === []) {
                    return null;
                }

                return [
                    'type' => $resolvedFamily,
                    'label' => MaterialSetting::getMaterialLabel($resolvedFamily),
                    'count' => count($items),
                    'items' => array_values($items),
                ];
            })
            ->filter()
            ->values();

        return response()->json([
            'data' => $data,
        ]);
    }

    private function resolveLocation(int $storeId, int $locationId, bool $withMaterials = false): ?StoreLocation
    {
        $query = StoreLocation::query()
            ->where('store_id', $storeId)
            ->with('store')
            ->withCount('materialAvailabilities');

        if ($withMaterials) {
            $query->with('materialAvailabilities.materialable');
        }

        return $query->find($locationId);
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
            'city' => $location->city,
            'province' => $location->province,
            'latitude' => $location->latitude,
            'longitude' => $location->longitude,
            'place_id' => $location->place_id,
            'formatted_address' => $location->formatted_address,
            'resolved_address' => $location->resolved_address,
            'contact_name' => $location->contact_name,
            'contact_phone' => $location->contact_phone,
            'material_availabilities_count' => (int) ($location->material_availabilities_count ?? 0),
            'created_at' => $location->created_at?->toJSON(),
            'updated_at' => $location->updated_at?->toJSON(),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    private function validationRules(): array
    {
        return [
            'address' => ['nullable', 'string'],
            'district' => ['nullable', 'string', 'max:255'],
            'city' => ['nullable', 'string', 'max:255'],
            'province' => ['nullable', 'string', 'max:255'],
            'latitude' => ['nullable', 'numeric', 'between:-90,90'],
            'longitude' => ['nullable', 'numeric', 'between:-180,180'],
            'place_id' => ['nullable', 'string', 'max:255'],
            'formatted_address' => ['nullable', 'string'],
            'contact_name' => ['nullable', 'string', 'max:255'],
            'contact_phone' => ['nullable', 'string', 'max:255'],
        ];
    }
}
