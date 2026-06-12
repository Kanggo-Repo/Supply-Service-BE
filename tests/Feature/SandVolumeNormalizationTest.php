<?php

use App\Models\Sand;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('package volume is rounded to 11 decimals on save', function (): void {
    $sand = Sand::query()->create([
        'sand_name' => 'Pasir Beton',
        'brand' => 'Galunggung',
        'type' => 'Beton',
        'package_volume' => 0.123456789012345,
    ]);

    expect((float) $sand->fresh()->package_volume)->toBe(0.12345678901);
});

test('comparison price per m3 is recomputed from price and volume on save', function (): void {
    $sand = Sand::query()->create([
        'sand_name' => 'Pasir Pasang',
        'brand' => 'Cimangkok',
        'type' => 'Pasang',
        'package_volume' => 0.25,
        'package_price' => 100000,
        'comparison_price_per_m3' => 1, // stale value, must be overwritten
    ]);

    // 100000 / 0.25 = 400000
    expect((float) $sand->fresh()->comparison_price_per_m3)->toBe(400000.0);
});

test('comparison price is recomputed against the rounded volume', function (): void {
    $sand = Sand::query()->create([
        'sand_name' => 'Pasir Urug',
        'brand' => 'Bangka',
        'type' => 'Urug',
        'package_volume' => 0.333333333333333, // rounds to 0.33333333333
        'package_price' => 50000,
    ]);

    $fresh = $sand->fresh();

    expect((float) $fresh->package_volume)->toBe(0.33333333333)
        ->and((float) $fresh->comparison_price_per_m3)
        ->toBe(round(50000 / 0.33333333333, 2));
});

test('comparison price is left untouched when volume is missing', function (): void {
    $sand = Sand::query()->create([
        'sand_name' => 'Pasir Tanpa Volume',
        'brand' => 'Lokal',
        'type' => 'Halus',
        'package_price' => 75000,
        'comparison_price_per_m3' => 12345,
    ]);

    expect((float) $sand->fresh()->comparison_price_per_m3)->toBe(12345.0);
});
