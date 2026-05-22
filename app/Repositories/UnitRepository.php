<?php

namespace App\Repositories;

use App\Models\Unit;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class UnitRepository
{
    public function getUnits(array $filters = [], int $perPage = 20): LengthAwarePaginator
    {
        $query = Unit::query()->with('materialTypes');

        if (! empty($filters['material_type'])) {
            $query->forMaterial($filters['material_type']);
        }

        $allowedSorts = ['code', 'name', 'package_weight', 'created_at'];
        $sortBy = in_array($filters['sort_by'] ?? 'name', $allowedSorts, true)
            ? ($filters['sort_by'] ?? 'name')
            : 'name';
        $sortDirection = in_array($filters['sort_direction'] ?? 'asc', ['asc', 'desc'], true)
            ? ($filters['sort_direction'] ?? 'asc')
            : 'asc';

        return $query->orderBy($sortBy, $sortDirection)->paginate($perPage);
    }

    public function findUnit(int $id): ?Unit
    {
        return Unit::query()->with('materialTypes')->find($id);
    }

    public function createUnit(array $data): Unit
    {
        return DB::transaction(function () use ($data): Unit {
            $unit = Unit::query()->create([
                'code' => $data['code'],
                'name' => $data['name'],
                'package_weight' => $data['package_weight'],
                'description' => $data['description'] ?? null,
            ]);

            $this->syncMaterialTypes($unit, $data['material_types'] ?? []);

            return $unit->fresh('materialTypes');
        });
    }

    public function updateUnit(Unit $unit, array $data): Unit
    {
        return DB::transaction(function () use ($unit, $data): Unit {
            $unit->update([
                'code' => $data['code'],
                'name' => $data['name'],
                'package_weight' => $data['package_weight'],
                'description' => $data['description'] ?? null,
            ]);

            $this->syncMaterialTypes($unit, $data['material_types'] ?? []);

            return $unit->fresh('materialTypes');
        });
    }

    public function deleteUnit(Unit $unit): bool
    {
        return (bool) $unit->delete();
    }

    /**
     * @return array<string, array<int, array<string, mixed>>>
     */
    public function getUnitsGroupedByMaterialType(): array
    {
        return Unit::getGroupedByMaterialType();
    }

    /**
     * @return list<array{value: string, label: string}>
     */
    public function getMaterialTypesWithLabels(): array
    {
        return Unit::getMaterialTypesWithLabels();
    }

    /**
     * @param  list<string>  $materialTypes
     */
    private function syncMaterialTypes(Unit $unit, array $materialTypes): void
    {
        $unit->materialTypes()->delete();

        foreach ($materialTypes as $type) {
            $unit->materialTypes()->create([
                'material_type' => $type,
            ]);
        }
    }
}
