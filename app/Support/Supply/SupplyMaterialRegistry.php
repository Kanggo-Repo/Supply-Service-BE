<?php

namespace App\Support\Supply;

use App\Models\Brick;
use App\Models\Cat;
use App\Models\Cement;
use App\Models\Ceramic;
use App\Models\KasaGypsum;
use App\Models\Nat;
use App\Models\Paku;
use App\Models\PakuTembak;
use App\Models\Sand;
use App\Models\Steel;

class SupplyMaterialRegistry
{
    /**
     * @return array<string, class-string>
     */
    public static function models(): array
    {
        return [
            'brick' => Brick::class,
            'cement' => Cement::class,
            'sand' => Sand::class,
            'cat' => Cat::class,
            'ceramic' => Ceramic::class,
            'nat' => Nat::class,
            'steel' => Steel::class,
            'kasa_gypsum' => KasaGypsum::class,
            'paku_tembak' => PakuTembak::class,
            'paku' => Paku::class,
        ];
    }

    /**
     * @return list<string>
     */
    public static function families(): array
    {
        return array_keys(self::models());
    }

    public static function normalizeFamily(string $family): ?string
    {
        $mapping = [
            'bata' => 'brick',
            'brick' => 'brick',
            'semen' => 'cement',
            'cement' => 'cement',
            'pasir' => 'sand',
            'sand' => 'sand',
            'cat' => 'cat',
            'keramik' => 'ceramic',
            'ceramic' => 'ceramic',
            'nat' => 'nat',
            'besi' => 'steel',
            'steel' => 'steel',
            'kasa' => 'kasa_gypsum',
            'kasa-gypsum' => 'kasa_gypsum',
            'kasa_gypsum' => 'kasa_gypsum',
            'paku-tembak' => 'paku_tembak',
            'paku_tembak' => 'paku_tembak',
            'paku' => 'paku',
            'pakus' => 'paku',
        ];

        return $mapping[strtolower($family)] ?? null;
    }

    public static function modelForFamily(string $family): ?string
    {
        $normalized = self::normalizeFamily($family);

        return $normalized ? (self::models()[$normalized] ?? null) : null;
    }

    public static function familyForModel(string $modelClass): ?string
    {
        return array_search($modelClass, self::models(), true) ?: null;
    }

    public static function nameField(string $family): string
    {
        return [
            'brick' => 'material_name',
            'cement' => 'cement_name',
            'sand' => 'sand_name',
            'cat' => 'cat_name',
            'ceramic' => 'material_name',
            'nat' => 'nat_name',
            'steel' => 'material_name',
            'kasa_gypsum' => 'material_name',
            'paku_tembak' => 'material_name',
            'paku' => 'material_name',
        ][$family];
    }

    /**
     * @return list<string>
     */
    public static function writableFields(string $family): array
    {
        return match ($family) {
            'brick' => [
                'material_name',
                'type',
                'photo',
                'brand',
                'form',
                'dimension_length',
                'dimension_width',
                'dimension_height',
                'package_volume',
                'store',
                'address',
                'short_address',
                'store_location_id',
                'price_per_piece',
                'comparison_price_per_m3',
                'package_type',
            ],
            'cement' => [
                'cement_name',
                'type',
                'photo',
                'brand',
                'sub_brand',
                'code',
                'color',
                'package_unit',
                'package_weight_gross',
                'package_weight_net',
                'package_volume',
                'store',
                'address',
                'short_address',
                'store_location_id',
                'package_price',
                'price_unit',
                'comparison_price_per_kg',
            ],
            'sand' => [
                'sand_name',
                'type',
                'photo',
                'brand',
                'package_unit',
                'package_weight_gross',
                'package_weight_net',
                'dimension_length',
                'dimension_width',
                'dimension_height',
                'package_volume',
                'store',
                'address',
                'short_address',
                'store_location_id',
                'package_price',
                'comparison_price_per_m3',
            ],
            'cat' => [
                'cat_name',
                'type',
                'photo',
                'brand',
                'sub_brand',
                'color_code',
                'color_name',
                'form',
                'package_unit',
                'package_weight_gross',
                'package_weight_net',
                'volume',
                'volume_unit',
                'store',
                'address',
                'short_address',
                'store_location_id',
                'purchase_price',
                'price_unit',
                'comparison_price_per_kg',
            ],
            'ceramic' => [
                'material_name',
                'type',
                'photo',
                'brand',
                'sub_brand',
                'code',
                'color',
                'form',
                'dimension_length',
                'dimension_width',
                'dimension_thickness',
                'packaging',
                'pieces_per_package',
                'coverage_per_package',
                'surface',
                'store',
                'address',
                'store_location_id',
                'price_per_package',
                'comparison_price_per_m2',
            ],
            'nat' => [
                'nat_name',
                'type',
                'photo',
                'brand',
                'sub_brand',
                'code',
                'color',
                'package_unit',
                'package_weight_gross',
                'package_weight_net',
                'package_volume',
                'store',
                'address',
                'store_location_id',
                'package_price',
                'price_unit',
                'comparison_price_per_kg',
            ],
            'steel' => [
                'material_name',
                'type',
                'brand',
                'quality',
                'term',
                'form',
                'dimension_length',
                'dimension_width',
                'dimension_height',
                'dimension_thickness',
                'package_volume',
                'store',
                'address',
                'store_location_id',
                'package_unit',
                'package_price',
                'comparison_price_per_m3',
                'photo',
            ],
            'kasa_gypsum' => [
                'material_name',
                'type',
                'brand',
                'dimension_length',
                'dimension_width',
                'store',
                'address',
                'store_location_id',
                'package_unit',
                'package_price',
                'comparison_price_per_m',
                'photo',
            ],
            'paku_tembak' => [
                'material_name',
                'type',
                'brand',
                'package_unit',
                'mesiu_code',
                'mesiu_size',
                'mesiu_content',
                'paku_code',
                'paku_size',
                'paku_content',
                'store',
                'address',
                'store_location_id',
                'package_price',
                'comparison_price',
                'photo',
            ],
            'paku' => [
                'material_name',
                'type',
                'brand',
                'dimension_length',
                'dimension_length_mm',
                'dimension_body_diameter',
                'dimension_head_diameter',
                'color',
                'package_unit',
                'package_weight',
                'package_content',
                'store',
                'address',
                'store_location_id',
                'package_price',
                'comparison_price',
                'photo',
            ],
        };
    }
}
