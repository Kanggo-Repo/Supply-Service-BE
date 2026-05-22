<?php

use App\Console\Commands\AutoAssignMaterialsToStoreLocationsCommand;
use App\Models\Brick;
use App\Models\Store;
use App\Models\StoreLocation;
use App\Models\StoreMaterialAvailability;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

uses(RefreshDatabase::class);

test('auto assign materials command links material to the only location owned by a store', function (): void {
    $store = Store::create(['name' => 'TB. Single Lokasi']);
    $location = StoreLocation::create([
        'store_id' => $store->id,
        'address' => 'Jalan Pagedangan Raya 2',
        'formatted_address' => 'Jl. Pagedangan Raya No.2, Pagedangan, Kabupaten Tangerang, Banten 15339, Indonesia',
    ]);

    $brickId = DB::table('bricks')->insertGetId([
        'material_name' => 'Bata',
        'brand' => 'Brand Single',
        'type' => 'Merah',
        'store' => 'TB. Single Lokasi',
        'address' => 'alamat lama',
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    $brick = Brick::query()->findOrFail($brickId);

    $exitCode = Artisan::call(AutoAssignMaterialsToStoreLocationsCommand::class, [
        '--material' => 'brick',
    ]);

    expect($exitCode)->toBe(0);

    $brick->refresh();

    expect((int) $brick->store_location_id)->toBe((int) $location->id)
        ->and($brick->address)->toBe('Jalan Pagedangan Raya 2');

    expect(StoreMaterialAvailability::query()
        ->where('store_location_id', $location->id)
        ->where('materialable_type', Brick::class)
        ->where('materialable_id', $brick->id)
        ->exists())->toBeTrue();
});

test('auto assign materials command skips ambiguous multi location stores when address does not match exactly one location', function (): void {
    $store = Store::create(['name' => 'TB. Multi Lokasi']);
    StoreLocation::create([
        'store_id' => $store->id,
        'address' => 'Jalan A',
        'formatted_address' => 'Jl. A, Tangerang',
    ]);
    StoreLocation::create([
        'store_id' => $store->id,
        'address' => 'Jalan B',
        'formatted_address' => 'Jl. B, Tangerang',
    ]);

    $brickId = DB::table('bricks')->insertGetId([
        'material_name' => 'Bata',
        'brand' => 'Brand Multi',
        'type' => 'Merah',
        'store' => 'TB. Multi Lokasi',
        'address' => 'alamat tidak cocok',
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    $brick = Brick::query()->findOrFail($brickId);

    $exitCode = Artisan::call(AutoAssignMaterialsToStoreLocationsCommand::class, [
        '--dry-run' => true,
        '--material' => 'brick',
    ]);

    expect($exitCode)->toBe(0)
        ->and(Artisan::output())->toContain('ambiguous_location');

    $brick->refresh();

    expect($brick->store_location_id)->toBeNull();
});
