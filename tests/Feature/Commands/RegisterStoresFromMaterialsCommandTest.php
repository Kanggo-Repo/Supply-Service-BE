<?php

use App\Console\Commands\RegisterStoresFromMaterialsCommand;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

uses(RefreshDatabase::class);

test('register stores from materials command summarizes and creates missing stores and store locations', function (): void {
    DB::table('stores')->insert([
        'name' => 'TB. Existing',
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    DB::table('bricks')->insert([
        ['store' => 'TB. Existing', 'address' => 'Jl. Existing', 'created_at' => now(), 'updated_at' => now()],
        ['store' => 'TB. New Alpha', 'address' => 'Jl. Alpha 1', 'created_at' => now(), 'updated_at' => now()],
        ['store' => ' TB. New Alpha ', 'address' => 'Jl. Alpha 1', 'created_at' => now(), 'updated_at' => now()],
    ]);

    DB::table('cements')->insert([
        ['store' => 'TB. New Beta', 'address' => 'Jl. Beta 2', 'created_at' => now(), 'updated_at' => now()],
        ['store' => 'tb. new beta', 'address' => 'Jl. Beta 2', 'created_at' => now(), 'updated_at' => now()],
        ['store' => '', 'address' => 'Jl. Blank', 'created_at' => now(), 'updated_at' => now()],
    ]);

    $dryRunExitCode = Artisan::call(RegisterStoresFromMaterialsCommand::class, [
        '--json' => true,
    ]);

    expect($dryRunExitCode)->toBe(0);

    $report = json_decode(Artisan::output(), true, 512, JSON_THROW_ON_ERROR);

    expect($report['tables']['bricks'])->toBe(2)
        ->and($report['tables']['cements'])->toBe(1)
        ->and($report['missing_store_names'])->toBe(['TB. New Alpha', 'TB. New Beta'])
        ->and($report['missing_store_location_count'])->toBe(3);

    expect(DB::table('stores')->count())->toBe(1);
    expect(DB::table('store_locations')->count())->toBe(0);

    $createExitCode = Artisan::call(RegisterStoresFromMaterialsCommand::class);

    expect($createExitCode)->toBe(0)
        ->and(DB::table('stores')->orderBy('name')->pluck('name')->all())
        ->toBe(['TB. Existing', 'TB. New Alpha', 'TB. New Beta']);

    $alphaStoreId = DB::table('stores')->where('name', 'TB. New Alpha')->value('id');
    $betaStoreId = DB::table('stores')->where('name', 'TB. New Beta')->value('id');
    $existingStoreId = DB::table('stores')->where('name', 'TB. Existing')->value('id');

    expect(DB::table('store_locations')->where('store_id', $alphaStoreId)->pluck('address')->all())->toBe(['Jl. Alpha 1'])
        ->and(DB::table('store_locations')->where('store_id', $betaStoreId)->pluck('address')->all())->toBe(['Jl. Beta 2'])
        ->and(DB::table('store_locations')->where('store_id', $existingStoreId)->pluck('address')->all())->toBe(['Jl. Existing']);
});

test('register stores from materials command does not duplicate existing store locations', function (): void {
    $storeId = DB::table('stores')->insertGetId([
        'name' => 'TB. Dedup',
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    DB::table('store_locations')->insert([
        'store_id' => $storeId,
        'address' => 'Jl. Dedup 9',
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    DB::table('bricks')->insert([
        'store' => 'TB. Dedup',
        'address' => 'Jl. Dedup 9',
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    DB::table('cements')->insert([
        'store' => 'TB. Dedup',
        'address' => ' Jl. Dedup 9 ',
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    $exitCode = Artisan::call(RegisterStoresFromMaterialsCommand::class);

    expect($exitCode)->toBe(0)
        ->and(DB::table('store_locations')->where('store_id', $storeId)->count())->toBe(1);
});
