<?php

use App\Models\Brick;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('package volume is rounded to 11 decimals on save', function (): void {
    $brick = Brick::query()->create([
        'material_name' => 'Bata',
        'brand' => 'Jatiwangi',
        'type' => 'Merah',
        'package_type' => 'eceran',
        'package_volume' => 0.123456789012345,
        'price_per_piece' => 1000,
    ]);

    expect((float) $brick->fresh()->package_volume)->toBe(0.12345678901);
});

test('eceran brick recomputes comparison from price and volume', function (): void {
    $brick = Brick::query()->create([
        'material_name' => 'Bata',
        'brand' => 'Garut',
        'type' => 'Merah',
        'package_type' => 'eceran',
        'package_volume' => 0.002,
        'price_per_piece' => 1000,
        'comparison_price_per_m3' => 1, // stale, must be overwritten
    ]);

    $fresh = $brick->fresh();

    // Price stays (source of truth); comparison = 1000 / 0.002 = 500000.
    expect((float) $fresh->price_per_piece)->toBe(1000.0)
        ->and((float) $fresh->comparison_price_per_m3)->toBe(500000.0);
});

test('kubik brick recomputes price per piece from comparison and volume', function (): void {
    $brick = Brick::query()->create([
        'material_name' => 'Bata',
        'brand' => 'Expose',
        'type' => 'Kubik',
        'package_type' => 'kubik',
        'package_volume' => 0.002,
        'comparison_price_per_m3' => 500000,
        'price_per_piece' => 1, // stale, must be overwritten
    ]);

    $fresh = $brick->fresh();

    // Comparison stays (source of truth); price = 500000 * 0.002 = 1000.
    expect((float) $fresh->comparison_price_per_m3)->toBe(500000.0)
        ->and((float) $fresh->price_per_piece)->toBe(1000.0);
});

test('pricing is left untouched when volume is missing', function (): void {
    $brick = Brick::query()->create([
        'material_name' => 'Bata',
        'brand' => 'Lokal',
        'type' => 'Merah',
        'package_type' => 'eceran',
        'price_per_piece' => 1500,
        'comparison_price_per_m3' => 999,
    ]);

    $fresh = $brick->fresh();

    expect((float) $fresh->price_per_piece)->toBe(1500.0)
        ->and((float) $fresh->comparison_price_per_m3)->toBe(999.0);
});
