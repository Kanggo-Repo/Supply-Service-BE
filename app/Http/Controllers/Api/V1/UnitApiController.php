<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Repositories\UnitRepository;
use App\Support\Supply\SupplyMaterialRegistry;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UnitApiController extends Controller
{
    public function __construct(private UnitRepository $repository) {}

    public function index(Request $request): JsonResponse
    {
        $filters = [
            'material_type' => SupplyMaterialRegistry::normalizeFamily((string) $request->input('material_type')),
            'sort_by' => $request->input('sort_by'),
            'sort_direction' => $request->input('sort_direction'),
        ];

        $all = filter_var($request->input('all', false), FILTER_VALIDATE_BOOLEAN);
        $perPage = (int) $request->input('per_page', 20);
        $perPage = $perPage > 0 ? $perPage : 20;

        if ($all) {
            $units = $this->repository->getAllUnits($filters);
            $total = $units->count();

            return response()->json([
                'success' => true,
                'data' => $units
                    ->map(fn ($unit): array => $this->serializeUnit($unit))
                    ->values()
                    ->all(),
                'pagination' => [
                    'current_page' => 1,
                    'per_page' => $total,
                    'total' => $total,
                    'last_page' => 1,
                ],
            ]);
        }

        $units = $this->repository->getUnits($filters, $perPage);

        return response()->json([
            'success' => true,
            'data' => collect($units->items())
                ->map(fn ($unit): array => $this->serializeUnit($unit))
                ->values()
                ->all(),
            'pagination' => [
                'current_page' => $units->currentPage(),
                'per_page' => $units->perPage(),
                'total' => $units->total(),
                'last_page' => $units->lastPage(),
            ],
        ]);
    }

    public function getMaterialTypes(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $this->repository->getMaterialTypesWithLabels(),
        ]);
    }

    public function getGrouped(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $this->repository->getUnitsGroupedByMaterialType(),
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $this->validateUnitPayload($request);
        $unit = $this->repository->createUnit($validated);

        return response()->json([
            'success' => true,
            'message' => 'Unit created successfully',
            'data' => $this->serializeUnit($unit),
        ], 201);
    }

    public function show(int $id): JsonResponse
    {
        $unit = $this->repository->findUnit($id);

        if (! $unit) {
            return response()->json([
                'success' => false,
                'message' => 'Unit not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $this->serializeUnit($unit),
        ]);
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $unit = $this->repository->findUnit($id);

        if (! $unit) {
            return response()->json([
                'success' => false,
                'message' => 'Unit not found',
            ], 404);
        }

        $validated = $this->validateUnitPayload($request);
        $unit = $this->repository->updateUnit($unit, $validated);

        return response()->json([
            'success' => true,
            'message' => 'Unit updated successfully',
            'data' => $this->serializeUnit($unit),
        ]);
    }

    public function destroy(int $id): JsonResponse
    {
        $unit = $this->repository->findUnit($id);

        if (! $unit) {
            return response()->json([
                'success' => false,
                'message' => 'Unit not found',
            ], 404);
        }

        $this->repository->deleteUnit($unit);

        return response()->json([
            'success' => true,
            'message' => 'Unit deleted successfully',
        ]);
    }

    /**
     * @return array{code: string, name: string, package_weight: int|float, description?: string|null, material_types: list<string>}
     */
    private function validateUnitPayload(Request $request): array
    {
        $validated = $request->validate([
            'code' => ['required', 'string', 'max:20'],
            'material_types' => ['required', 'array', 'min:1'],
            'material_types.*' => ['required', 'string'],
            'name' => ['required', 'string', 'max:100'],
            'package_weight' => ['required', 'numeric', 'min:0'],
            'description' => ['nullable', 'string'],
        ]);

        $validated['material_types'] = collect($validated['material_types'])
            ->map(fn (string $type): ?string => SupplyMaterialRegistry::normalizeFamily($type))
            ->filter()
            ->unique()
            ->values()
            ->all();

        if ($validated['material_types'] === []) {
            throw ValidationException::withMessages([
                'material_types' => ['At least one valid material type is required.'],
            ]);
        }

        return $validated;
    }

    /**
     * @return array<string, mixed>
     */
    private function serializeUnit($unit): array
    {
        return [
            'id' => $unit->id,
            'code' => $unit->code,
            'name' => $unit->name,
            'package_weight' => $unit->package_weight,
            'description' => $unit->description,
            'material_types' => $unit->materialTypes
                ->pluck('material_type')
                ->values()
                ->all(),
        ];
    }
}
