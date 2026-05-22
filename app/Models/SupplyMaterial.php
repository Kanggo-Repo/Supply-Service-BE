<?php

namespace App\Models;

use App\Models\Concerns\HasMaterialChangeHistory;
use App\Models\Concerns\SyncsStoreLocationSnapshot;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable([
    'material_name',
    'cement_name',
    'sand_name',
    'cat_name',
    'nat_name',
    'photo',
    'brand',
    'type',
    'sub_brand',
    'color',
    'color_code',
    'color_name',
    'code',
    'form',
    'package_unit',
    'package_weight_gross',
    'package_weight_net',
    'package_weight',
    'package_content',
    'package_volume',
    'package_type',
    'packaging',
    'pieces_per_package',
    'coverage_per_package',
    'volume',
    'volume_unit',
    'dimension_length',
    'dimension_length_mm',
    'dimension_width',
    'dimension_height',
    'dimension_thickness',
    'dimension_body_diameter',
    'dimension_head_diameter',
    'surface',
    'quality',
    'term',
    'store',
    'address',
    'short_address',
    'price_per_piece',
    'price_per_package',
    'package_price',
    'purchase_price',
    'price_unit',
    'comparison_price_per_kg',
    'comparison_price_per_m2',
    'comparison_price_per_m',
    'comparison_price',
    'comparison_price_per_m3',
    'material_kind',
    'mesiu_code',
    'mesiu_size',
    'mesiu_content',
    'paku_code',
    'paku_size',
    'paku_content',
    'store_location_id',
    'deleted_by',
])]
abstract class SupplyMaterial extends Model
{
    use HasFactory, HasMaterialChangeHistory, SoftDeletes, SyncsStoreLocationSnapshot;

    protected function casts(): array
    {
        return [
            'package_weight_gross' => 'float',
            'package_weight_net' => 'float',
            'package_weight' => 'float',
            'package_content' => 'float',
            'package_volume' => 'float',
            'pieces_per_package' => 'int',
            'coverage_per_package' => 'float',
            'volume' => 'float',
            'dimension_length' => 'float',
            'dimension_length_mm' => 'float',
            'dimension_width' => 'float',
            'dimension_height' => 'float',
            'dimension_thickness' => 'float',
            'dimension_body_diameter' => 'float',
            'dimension_head_diameter' => 'float',
            'price_per_piece' => 'float',
            'price_per_package' => 'float',
            'package_price' => 'float',
            'purchase_price' => 'float',
            'comparison_price_per_kg' => 'float',
            'comparison_price_per_m2' => 'float',
            'comparison_price_per_m' => 'float',
            'comparison_price' => 'float',
            'comparison_price_per_m3' => 'float',
            'mesiu_content' => 'float',
            'paku_content' => 'float',
            'deleted_by' => 'int',
        ];
    }

    public function storeLocation(): BelongsTo
    {
        return $this->belongsTo(StoreLocation::class);
    }

    public function deletedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }

    public function materialAvailabilities(): MorphMany
    {
        return $this->morphMany(StoreMaterialAvailability::class, 'materialable');
    }
}
