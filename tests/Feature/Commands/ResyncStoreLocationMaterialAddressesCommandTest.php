<?php

use App\Console\Commands\ResyncStoreLocationMaterialAddressesCommand;
use App\Models\Brick;
use App\Models\Store;
use App\Models\StoreLocation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

uses(RefreshDatabase::class);

test('resync material addresses command prefers manual store location address', function (): void {
    $store = Store::create(['name' => 'TB Resync Manual']);
    $location = StoreLocation::create([
        'store_id' => $store->id,
        'address' => 'Jl. Manual User No. 12',
        'district' => 'Pagedangan',
        'city' => 'Kabupaten Tangerang',
        'province' => 'Banten',
        'formatted_address' => 'Jl. Google Maps No. 99, Pagedangan, Kabupaten Tangerang, Banten 15339, Indonesia',
    ]);

    $brickId = DB::table('bricks')->insertGetId([
        'material_name' => 'Bata',
        'type' => 'Press',
        'brand' => 'Brand Resync Manual',
        'form' => 'Solid',
        'store' => 'Nama Lama',
        'address' => 'Alamat Google Lama',
        'store_location_id' => $location->id,
        'price_per_piece' => 1500,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    $brick = Brick::query()->findOrFail($brickId);

    $exitCode = Artisan::call(ResyncStoreLocationMaterialAddressesCommand::class, [
        '--material' => 'brick',
    ]);

    expect($exitCode)->toBe(0);

    $brick->refresh();

    expect($brick->store)->toBe('TB Resync Manual')
        ->and($brick->address)->toBe('Jl. Manual User No. 12')
        ->and(Artisan::output())->toContain('updated');
});

test('resync material addresses command supports dry run without changing material snapshot', function (): void {
    $store = Store::create(['name' => 'TB Resync Dry Run']);
    $location = StoreLocation::create([
        'store_id' => $store->id,
        'address' => 'Jl. Manual Dry Run',
        'formatted_address' => 'Jl. Google Dry Run',
    ]);

    $brickId = DB::table('bricks')->insertGetId([
        'material_name' => 'Bata',
        'type' => 'Press',
        'brand' => 'Brand Dry Run',
        'store' => 'Nama Lama Dry Run',
        'address' => 'Alamat Lama Dry Run',
        'store_location_id' => $location->id,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    $brick = Brick::query()->findOrFail($brickId);

    $exitCode = Artisan::call(ResyncStoreLocationMaterialAddressesCommand::class, [
        '--material' => 'brick',
        '--dry-run' => true,
    ]);

    expect($exitCode)->toBe(0);

    $brick->refresh();

    expect($brick->store)->toBe('Nama Lama Dry Run')
        ->and($brick->address)->toBe('Alamat Lama Dry Run')
        ->and(Artisan::output())->toContain('DRY RUN mode aktif');
});
