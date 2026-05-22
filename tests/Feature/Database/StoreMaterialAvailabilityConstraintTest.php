<?php

use App\Models\Brick;
use App\Models\StoreLocation;
use App\Models\StoreMaterialAvailability;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('store material availability rejects duplicate location material links', function (): void {
    $location = StoreLocation::factory()->create([
        'address' => 'Jl. Uji 123',
    ]);
    $brick = Brick::factory()->create([
        'brand' => 'Uji Bata',
    ]);

    StoreMaterialAvailability::query()->create([
        'store_location_id' => $location->id,
        'materialable_type' => Brick::class,
        'materialable_id' => $brick->id,
    ]);

    expect(fn () => StoreMaterialAvailability::query()->create([
        'store_location_id' => $location->id,
        'materialable_type' => Brick::class,
        'materialable_id' => $brick->id,
    ]))->toThrow(QueryException::class);
});
