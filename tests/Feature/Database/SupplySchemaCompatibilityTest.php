<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

uses(RefreshDatabase::class);

test('wave 1 supply schema keeps monolith compatible supply tables', function (): void {
    expect(Schema::hasTable('material_change_logs'))->toBeTrue();
    expect(Schema::hasColumns('store_locations', [
        'latitude',
        'longitude',
        'place_id',
        'formatted_address',
    ]))->toBeTrue();
    expect(Schema::hasColumn('store_locations', 'service_radius_km'))->toBeFalse();
    expect(Schema::hasColumns('units', [
        'code',
        'name',
        'package_weight',
        'description',
    ]))->toBeTrue();
    expect(Schema::hasColumn('units', 'material_type'))->toBeFalse();
    expect(Schema::hasColumns('material_settings', [
        'material_type',
        'is_visible',
        'display_order',
    ]))->toBeTrue();
    expect(Schema::hasColumn('material_settings', 'label'))->toBeFalse();

    expect(Schema::hasColumns('bricks', [
        'material_name',
        'photo',
        'form',
        'package_volume',
        'store',
        'address',
        'short_address',
        'store_location_id',
        'price_per_piece',
        'comparison_price_per_m3',
        'package_type',
        'deleted_at',
        'deleted_by',
    ]))->toBeTrue();
    expect(Schema::hasColumns('cements', [
        'cement_name',
        'photo',
        'code',
        'package_weight_gross',
        'package_volume',
        'store',
        'address',
        'short_address',
        'store_location_id',
        'package_price',
        'price_unit',
        'comparison_price_per_kg',
        'material_kind',
        'nat_name',
        'deleted_at',
        'deleted_by',
    ]))->toBeTrue();
    expect(Schema::hasColumn('cements', 'dimension_length'))->toBeFalse();
    expect(Schema::hasColumns('cats', [
        'cat_name',
        'color_code',
        'color_name',
        'purchase_price',
    ]))->toBeTrue();
    expect(Schema::hasColumns('ceramics', [
        'surface',
        'pieces_per_package',
        'coverage_per_package',
        'price_per_package',
        'comparison_price_per_m2',
    ]))->toBeTrue();
    expect(Schema::hasColumns('steels', [
        'quality',
        'term',
        'package_volume',
        'store_location_id',
    ]))->toBeTrue();
    expect(Schema::hasColumns('paku_tembaks', [
        'mesiu_code',
        'paku_code',
        'comparison_price',
    ]))->toBeTrue();
    expect(Schema::hasColumns('pakus', [
        'dimension_body_diameter',
        'dimension_head_diameter',
        'dimension_length_mm',
        'comparison_price',
    ]))->toBeTrue();

    $availabilityIndexes = collect(DB::select("PRAGMA index_list('store_material_availabilities')"))
        ->pluck('name');

    expect($availabilityIndexes)->toContain('sma_materialable_index');
    expect($availabilityIndexes)->toContain('sma_location_material_unique');
    expect($availabilityIndexes)->toContain('sma_location_type_index');
});
