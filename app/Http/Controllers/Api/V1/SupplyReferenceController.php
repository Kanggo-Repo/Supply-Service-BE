<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\BrickInstallationType;
use App\Models\MortarFormula;
use App\Models\Store;
use App\Models\StoreLocation;
use App\Support\Supply\SupplyMaterialLabelResolver;
use App\Support\Supply\SupplyMaterialRegistry;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rule;

class SupplyReferenceController extends Controller
{
    /**
     * @return array<string, class-string<Model>>
     */
    private function materialModels(): array
    {
        return SupplyMaterialRegistry::models();
    }

    public function materials(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'families' => ['nullable', 'array'],
            'families.*' => ['string', Rule::in(array_keys($this->materialModels()))],
        ]);

        $families = $validated['families'] ?? array_keys($this->materialModels());
        $materials = collect();

        foreach ($families as $family) {
            $modelClass = $this->materialModels()[$family];
            $items = $modelClass::query()
                ->get()
                ->map(fn (Model $material): array => $this->serializeMaterial($family, $material));

            $materials = $materials->merge($items);
        }

        return response()->json([
            'data' => $materials->values(),
        ]);
    }

    public function materialsByIds(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'items' => ['required', 'array', 'min:1'],
            'items.*.family' => ['required', 'string', Rule::in(array_keys($this->materialModels()))],
            'items.*.ids' => ['required', 'array', 'min:1'],
            'items.*.ids.*' => ['integer', 'min:1'],
        ]);

        $result = collect($validated['items'])
            ->map(function (array $item): array {
                $family = $item['family'];
                $modelClass = $this->materialModels()[$family];
                $materials = $modelClass::query()
                    ->whereIn('id', $item['ids'])
                    ->get()
                    ->map(fn (Model $material): array => $this->serializeMaterial($family, $material))
                    ->values();

                return [
                    'family' => $family,
                    'items' => $materials,
                ];
            })
            ->values();

        return response()->json([
            'data' => $result,
        ]);
    }

    public function filterMetadata(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'family' => ['required', 'string', Rule::in(array_keys($this->materialModels()))],
            'fields' => ['required', 'array', 'min:1'],
            'fields.*' => ['string'],
        ]);

        $family = $validated['family'];
        $modelClass = $this->materialModels()[$family];
        $table = (new $modelClass)->getTable();

        $fields = collect($validated['fields'])
            ->filter(fn (string $field): bool => Schema::hasColumn($table, $field))
            ->values();

        $fieldValues = [];

        foreach ($fields as $field) {
            $fieldValues[$field] = $modelClass::query()
                ->whereNotNull($field)
                ->pluck($field)
                ->map(fn (mixed $value): mixed => is_string($value) ? trim($value) : $value)
                ->filter(fn (mixed $value): bool => $value !== '' && $value !== null)
                ->unique()
                ->values()
                ->all();
        }

        return response()->json([
            'data' => [
                'family' => $family,
                'fields' => $fieldValues,
            ],
        ]);
    }

    public function stores(): JsonResponse
    {
        $stores = Store::query()
            ->withCount('locations')
            ->orderBy('name')
            ->get()
            ->map(fn (Store $store): array => [
                'id' => $store->id,
                'name' => $store->name,
                'location_count' => (int) $store->locations_count,
            ])
            ->values();

        return response()->json([
            'data' => $stores,
        ]);
    }

    public function storeLocations(int $storeId): JsonResponse
    {
        $store = Store::query()->find($storeId);

        if (! $store) {
            return response()->json([
                'message' => 'Store not found.',
            ], 404);
        }

        $locations = $store->locations()
            ->withCount('materialAvailabilities')
            ->get()
            ->map(fn (StoreLocation $location): array => [
                'id' => $location->id,
                'store_id' => $location->store_id,
                'address' => $location->resolved_address,
                'latitude' => $location->latitude,
                'longitude' => $location->longitude,
                'material_availabilities_count' => (int) $location->material_availabilities_count,
            ])
            ->values();

        return response()->json([
            'data' => $locations,
        ]);
    }

    public function locations(): JsonResponse
    {
        $locations = StoreLocation::query()
            ->with('store')
            ->withCount('materialAvailabilities')
            ->get()
            ->map(fn (StoreLocation $location): array => [
                'id' => $location->id,
                'store_id' => $location->store_id,
                'store_name' => $location->store?->name,
                'address' => $location->resolved_address,
                'latitude' => $location->latitude,
                'longitude' => $location->longitude,
                'material_availabilities_count' => (int) $location->material_availabilities_count,
            ])
            ->sortBy([
                ['store_name', 'asc'],
                ['id', 'asc'],
            ])
            ->values();

        return response()->json([
            'data' => $locations,
        ]);
    }

    public function locationAvailability(int $locationId): JsonResponse
    {
        $location = StoreLocation::query()
            ->with(['materialAvailabilities.materialable', 'store'])
            ->find($locationId);

        if (! $location) {
            return response()->json([
                'message' => 'Store location not found.',
            ], 404);
        }

        return response()->json([
            'data' => [
                'location_id' => $location->id,
                'store_id' => $location->store_id,
                'materials' => $this->serializeAvailabilityMaterials($location->materialAvailabilities),
            ],
        ]);
    }

    public function bulkLocationAvailability(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'location_ids' => ['required', 'array', 'min:1'],
            'location_ids.*' => ['integer', 'min:1'],
        ]);

        $locations = StoreLocation::query()
            ->with(['materialAvailabilities.materialable', 'store'])
            ->whereIn('id', $validated['location_ids'])
            ->get()
            ->map(fn (StoreLocation $location): array => [
                'location_id' => $location->id,
                'store_id' => $location->store_id,
                'materials' => $this->serializeAvailabilityMaterials($location->materialAvailabilities),
            ])
            ->values();

        return response()->json([
            'data' => $locations,
        ]);
    }

    public function brickInstallationTypes(): JsonResponse
    {
        $types = BrickInstallationType::query()
            ->where('is_active', true)
            ->orderBy('display_order')
            ->orderBy('name')
            ->get()
            ->map(fn (BrickInstallationType $type): array => [
                'id' => $type->id,
                'name' => $type->name,
                'code' => $type->code,
                'description' => $type->description,
                'mortar_volume_per_m2' => $this->numericOrNull($type->mortar_volume_per_m2),
                'waste_factor' => $this->numericOrNull($type->waste_factor),
                'visible_side_width' => $type->visible_side_width,
                'visible_side_height' => $type->visible_side_height,
                'orientation' => $type->orientation,
                'bricks_per_sqm' => $this->numericOrNull($type->bricks_per_sqm),
                'is_active' => (bool) $type->is_active,
                'display_order' => $type->display_order,
            ])
            ->values();

        return response()->json([
            'data' => $types,
        ]);
    }

    public function mortarFormulas(): JsonResponse
    {
        $formulas = MortarFormula::query()
            ->where('is_active', true)
            ->orderByDesc('is_default')
            ->orderBy('name')
            ->get()
            ->map(fn (MortarFormula $formula): array => [
                'id' => $formula->id,
                'name' => $formula->name,
                'description' => $formula->description,
                'cement_ratio' => $this->numericOrNull($formula->cement_ratio),
                'sand_ratio' => $this->numericOrNull($formula->sand_ratio),
                'water_ratio' => $this->numericOrNull($formula->water_ratio),
                'cement_kg_per_m3' => $this->numericOrNull($formula->cement_kg_per_m3),
                'sand_m3_per_m3' => $this->numericOrNull($formula->sand_m3_per_m3),
                'water_liter_per_m3' => $this->numericOrNull($formula->water_liter_per_m3),
                'expansion_factor' => $this->numericOrNull($formula->expansion_factor),
                'cement_bag_type' => $formula->cement_bag_type,
                'is_default' => (bool) $formula->is_default,
                'is_active' => (bool) $formula->is_active,
            ])
            ->values();

        return response()->json([
            'data' => $formulas,
        ]);
    }

    /**
     * @param  Collection<int, mixed>  $availabilities
     * @return Collection<int, array<string, mixed>>
     */
    private function serializeAvailabilityMaterials(Collection $availabilities): Collection
    {
        return $availabilities
            ->map(function ($availability): ?array {
                $material = $availability->materialable;

                if (! $material instanceof Model) {
                    return null;
                }

                return [
                    'family' => $this->resolveFamilyFromModel($material),
                    'material_id' => $material->getKey(),
                    'label' => $this->resolveMaterialLabel($material),
                    'brand' => $material->brand ?? null,
                    'type' => $material->type ?? null,
                    'price' => $this->resolvePrimaryPrice($material),
                ];
            })
            ->filter()
            ->values();
    }

    private function serializeMaterial(string $family, Model $material): array
    {
        return [
            'id' => $material->getKey(),
            'family' => $family,
            'label' => $this->resolveMaterialLabel($material),
            'brand' => $material->brand ?? null,
            'type' => $material->type ?? null,
            'sub_brand' => $material->sub_brand ?? null,
            'code' => $material->code ?? null,
            'color_code' => $material->color_code ?? null,
            'dimension' => $this->resolveDimension($material),
            'dimension_length' => $this->numericOrNull($material->getAttribute('dimension_length')),
            'dimension_width' => $this->numericOrNull($material->getAttribute('dimension_width')),
            'dimension_height' => $this->numericOrNull($material->getAttribute('dimension_height')),
            'dimension_thickness' => $this->numericOrNull($material->getAttribute('dimension_thickness')),
            'color' => $material->color ?? null,
            'surface' => $material->surface ?? null,
            'nat_name' => $material->nat_name ?? null,
            'package_unit' => $material->package_unit ?? null,
            'package_weight_net' => $this->numericOrNull($material->getAttribute('package_weight_net')),
            'package_volume' => $this->numericOrNull($material->getAttribute('package_volume')),
            'pieces_per_package' => $this->numericOrNull($material->getAttribute('pieces_per_package')),
            'coverage_per_package' => $this->numericOrNull($material->getAttribute('coverage_per_package')),
            'store_location_id' => $material->store_location_id ?? null,
            'price' => $this->resolvePrimaryPrice($material),
            'price_per_piece' => $this->numericOrNull($material->getAttribute('price_per_piece')),
            'price_per_package' => $this->numericOrNull($material->getAttribute('price_per_package')),
            'package_price' => $this->numericOrNull($material->getAttribute('package_price')),
            'comparison_price_per_m3' => $this->numericOrNull($material->getAttribute('comparison_price_per_m3')),
        ];
    }

    private function resolveMaterialLabel(Model $material): string
    {
        return SupplyMaterialLabelResolver::resolve($material);
    }

    private function resolveDimension(Model $material): ?string
    {
        $parts = collect([
            $material->getAttribute('dimension_length'),
            $material->getAttribute('dimension_width'),
            $material->getAttribute('dimension_height'),
        ])->filter(fn (mixed $value): bool => $value !== null && $value !== '')
            ->map(fn (mixed $value): string => $this->stringifyNumeric($value))
            ->values();

        if ($parts->isNotEmpty()) {
            return $parts->implode('x');
        }

        $thickness = $material->getAttribute('dimension_thickness');

        return $thickness === null || $thickness === ''
            ? null
            : $this->stringifyNumeric($thickness);
    }

    private function resolvePrimaryPrice(Model $material): float|int|null
    {
        foreach (['price_per_piece', 'package_price', 'price_per_package', 'purchase_price'] as $field) {
            $value = $material->getAttribute($field);

            if (is_numeric($value)) {
                return $value + 0;
            }
        }

        return null;
    }

    private function resolveFamilyFromModel(Model $material): string
    {
        return match (class_basename($material)) {
            'Brick' => 'brick',
            'Cement' => 'cement',
            'Sand' => 'sand',
            'Cat' => 'cat',
            'Ceramic' => 'ceramic',
            'Nat' => 'nat',
            'Steel' => 'steel',
            'KasaGypsum' => 'kasa_gypsum',
            'PakuTembak' => 'paku_tembak',
            'Paku' => 'paku',
            default => strtolower(class_basename($material)),
        };
    }

    private function numericOrNull(mixed $value): float|int|null
    {
        return is_numeric($value) ? $value + 0 : null;
    }

    private function stringifyNumeric(mixed $value): string
    {
        if (! is_numeric($value)) {
            return (string) $value;
        }

        $number = $value + 0;

        return fmod((float) $number, 1.0) === 0.0
            ? (string) (int) $number
            : rtrim(rtrim(number_format((float) $number, 2, '.', ''), '0'), '.');
    }
}
