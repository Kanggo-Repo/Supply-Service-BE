<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Support\Material\MaterialAuditContext;
use App\Support\Supply\SupplyMaterialLabelResolver;
use App\Support\Supply\SupplyMaterialRegistry;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class MaterialCatalogApiController extends Controller
{
    public function summary(): JsonResponse
    {
        $familyCounts = collect(SupplyMaterialRegistry::families())
            ->mapWithKeys(function (string $family): array {
                $modelClass = SupplyMaterialRegistry::modelForFamily($family);

                return [
                    $family => $modelClass ? $modelClass::query()->count() : 0,
                ];
            })
            ->all();

        $displayCounts = $familyCounts;
        $displayCounts['cement'] = (int) ($familyCounts['cement'] ?? 0) + (int) ($familyCounts['nat'] ?? 0);
        unset($displayCounts['nat']);

        return response()->json([
            'data' => [
                'families' => $familyCounts,
                'display_families' => $displayCounts,
                'grand_total' => array_sum($displayCounts),
            ],
        ]);
    }

    public function index(Request $request, string $family): JsonResponse
    {
        $normalizedFamily = SupplyMaterialRegistry::normalizeFamily($family);
        $modelClass = $normalizedFamily ? SupplyMaterialRegistry::modelForFamily($normalizedFamily) : null;

        if (! $normalizedFamily || ! $modelClass) {
            return response()->json(['error' => 'Invalid material type'], 404);
        }

        $allowedSortColumns = $this->allowedSortColumns($modelClass);
        $defaultSortBy = in_array('brand', $allowedSortColumns, true)
            ? 'brand'
            : ($allowedSortColumns[0] ?? 'id');

        $validator = Validator::make($request->all(), [
            'all' => ['nullable', 'boolean'],
            'search' => ['nullable', 'string', 'max:255'],
            'perPage' => ['nullable', 'integer', 'min:1'],
            'sortBy' => ['nullable', 'string', Rule::in($allowedSortColumns)],
            'sortDirection' => ['nullable', 'string', Rule::in(['asc', 'desc'])],
            'letter' => ['nullable', 'string', 'size:1', 'regex:/^[A-Za-z]$/'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $validated = $validator->validated();
        $query = $modelClass::query();

        if (! empty($validated['search'])) {
            $search = $validated['search'];
            $searchColumns = array_values(array_filter([
                SupplyMaterialRegistry::nameField($normalizedFamily),
                Schema::hasColumn((new $modelClass)->getTable(), 'brand') ? 'brand' : null,
                Schema::hasColumn((new $modelClass)->getTable(), 'type') ? 'type' : null,
                Schema::hasColumn((new $modelClass)->getTable(), 'sub_brand') ? 'sub_brand' : null,
            ]));

            $query->where(function ($builder) use ($search, $searchColumns): void {
                foreach ($searchColumns as $column) {
                    $builder->orWhere($column, 'like', "%{$search}%");
                }
            });
        }

        if (! empty($validated['letter']) && Schema::hasColumn((new $modelClass)->getTable(), 'brand')) {
            $query->where('brand', 'like', strtoupper($validated['letter']).'%');
        }

        $sortBy = $validated['sortBy'] ?? $defaultSortBy;
        $sortDirection = $validated['sortDirection'] ?? 'asc';
        $perPage = (int) ($validated['perPage'] ?? 25);
        $query->orderBy($sortBy, $sortDirection);

        $all = filter_var($validated['all'] ?? false, FILTER_VALIDATE_BOOLEAN);
        if ($all) {
            $materials = $query->get();
            $total = $materials->count();

            return response()->json([
                'data' => $materials
                    ->map(fn (Model $material): array => $this->serializeMaterial($normalizedFamily, $material))
                    ->values()
                    ->all(),
                'current_page' => 1,
                'per_page' => $total,
                'total' => $total,
                'last_page' => 1,
            ]);
        }

        $materials = $query->paginate($perPage);

        return response()->json([
            'data' => collect($materials->items())
                ->map(fn (Model $material): array => $this->serializeMaterial($normalizedFamily, $material))
                ->values()
                ->all(),
            'current_page' => $materials->currentPage(),
            'per_page' => $materials->perPage(),
            'total' => $materials->total(),
            'last_page' => $materials->lastPage(),
        ]);
    }

    public function show(string $family, int $id): JsonResponse
    {
        $material = $this->resolveMaterial($family, $id);

        if (! $material) {
            return response()->json(['error' => 'Material not found'], 404);
        }

        $normalizedFamily = SupplyMaterialRegistry::normalizeFamily($family);

        return response()->json([
            'data' => $this->serializeMaterial($normalizedFamily, $material),
        ]);
    }

    public function store(Request $request, string $family): JsonResponse
    {
        $normalizedFamily = SupplyMaterialRegistry::normalizeFamily($family);
        $modelClass = $normalizedFamily ? SupplyMaterialRegistry::modelForFamily($normalizedFamily) : null;

        if (! $normalizedFamily || ! $modelClass) {
            return response()->json(['error' => 'Invalid material type'], 404);
        }

        [$validator, $attributes] = $this->validatePayload($request->all(), $normalizedFamily, false);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $material = $modelClass::query()->create($attributes);

        return response()->json([
            'message' => 'Material created successfully',
            'data' => $this->serializeMaterial($normalizedFamily, $material),
        ], 201);
    }

    public function update(Request $request, string $family, int $id): JsonResponse
    {
        $normalizedFamily = SupplyMaterialRegistry::normalizeFamily($family);
        $material = $this->resolveMaterial($family, $id);

        if (! $normalizedFamily || ! $material) {
            return response()->json(['error' => 'Material not found'], 404);
        }

        [$validator, $attributes] = $this->validatePayload($request->all(), $normalizedFamily, true);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors(),
            ], 422);
        }

        if ($attributes === []) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => [
                    'payload' => ['No allowed update attributes were provided.'],
                ],
            ], 422);
        }

        $material->fill($attributes);

        if ($material->isDirty()) {
            $material->save();
        }

        return response()->json([
            'message' => 'Material updated successfully',
            'data' => $this->serializeMaterial($normalizedFamily, $material->fresh()),
        ]);
    }

    public function destroy(string $family, int $id): JsonResponse
    {
        $material = $this->resolveMaterial($family, $id);

        if (! $material) {
            return response()->json(['error' => 'Material not found'], 404);
        }

        $actorId = MaterialAuditContext::userId();

        if ($actorId !== null && in_array('deleted_by', $material->getFillable(), true)) {
            $material->forceFill([
                'deleted_by' => $actorId,
            ]);
            $material->saveQuietly();
        }

        $material->delete();

        return response()->json([
            'message' => 'Material deleted successfully',
        ]);
    }

    private function resolveMaterial(string $family, int $id): ?Model
    {
        $modelClass = SupplyMaterialRegistry::modelForFamily($family);

        return $modelClass ? $modelClass::query()->find($id) : null;
    }

    /**
     * @return array{0: \Illuminate\Contracts\Validation\Validator, 1: array<string, mixed>}
     */
    private function validatePayload(array $payload, string $family, bool $updating): array
    {
        $allowedFields = SupplyMaterialRegistry::writableFields($family);
        $blockedFields = ['id', 'deleted_by', 'deleted_at', 'created_at', 'updated_at', 'material_kind'];
        $unknownFields = array_values(array_diff(array_keys($payload), $allowedFields, $blockedFields));
        $attributes = Arr::only($payload, $allowedFields);
        $validator = Validator::make($payload, [
            'deleted_by' => ['prohibited'],
            'deleted_at' => ['prohibited'],
            'created_at' => ['prohibited'],
            'updated_at' => ['prohibited'],
            'material_kind' => ['prohibited'],
            'id' => ['prohibited'],
        ]);

        $validator->after(function ($validator) use ($payload, $updating, $unknownFields): void {
            if ($payload === []) {
                $validator->errors()->add('payload', $updating
                    ? 'No update attributes were provided.'
                    : 'No create attributes were provided.');
            }

            foreach ($unknownFields as $field) {
                $validator->errors()->add($field, 'This field is not allowed.');
            }
        });

        if (! array_key_exists(SupplyMaterialRegistry::nameField($family), $attributes)
            && ! $updating
            && in_array(SupplyMaterialRegistry::nameField($family), $allowedFields, true)
        ) {
            unset($attributes[SupplyMaterialRegistry::nameField($family)]);
        }

        return [$validator, $attributes];
    }

    /**
     * @param  class-string<Model>  $modelClass
     * @return list<string>
     */
    private function allowedSortColumns(string $modelClass): array
    {
        $table = (new $modelClass)->getTable();
        $columns = array_map('strtolower', Schema::getColumnListing($table));
        sort($columns);

        return $columns;
    }

    /**
     * @return array<string, mixed>
     */
    private function serializeMaterial(string $family, Model $material): array
    {
        return [
            ...$material->toArray(),
            'family' => $family,
            'label' => SupplyMaterialLabelResolver::resolve($material),
        ];
    }
}
