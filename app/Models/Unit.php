<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['code', 'name', 'package_weight', 'description'])]
class Unit extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'package_weight' => 'float',
        ];
    }

    public function materialTypes(): HasMany
    {
        return $this->hasMany(UnitMaterialType::class);
    }

    public function scopeForMaterial($query, string $materialType)
    {
        return $query->whereHas('materialTypes', function ($materialTypesQuery) use ($materialType): void {
            $materialTypesQuery->where('material_type', $materialType);
        });
    }

    /**
     * @return list<string>
     */
    public static function getMaterialTypes(): array
    {
        return [
            'brick',
            'cat',
            'cement',
            'nat',
            'sand',
            'ceramic',
            'steel',
            'kasa_gypsum',
            'paku_tembak',
            'paku',
        ];
    }

    /**
     * @return list<array{value: string, label: string}>
     */
    public static function getMaterialTypesWithLabels(): array
    {
        return collect(self::getMaterialTypes())
            ->map(fn (string $type): array => [
                'value' => $type,
                'label' => MaterialSetting::getMaterialLabel($type),
            ])
            ->values()
            ->all();
    }

    /**
     * @return array<string, array<int, array<string, mixed>>>
     */
    public static function getGroupedByMaterialType(): array
    {
        return collect(self::getMaterialTypes())
            ->mapWithKeys(fn (string $type): array => [
                $type => self::query()
                    ->forMaterial($type)
                    ->with('materialTypes')
                    ->orderBy('code')
                    ->get()
                    ->map(fn (self $unit): array => [
                        'id' => $unit->id,
                        'code' => $unit->code,
                        'name' => $unit->name,
                        'package_weight' => $unit->package_weight,
                        'description' => $unit->description,
                        'material_types' => $unit->materialTypes
                            ->pluck('material_type')
                            ->values()
                            ->all(),
                    ])
                    ->all(),
            ])
            ->all();
    }
}
