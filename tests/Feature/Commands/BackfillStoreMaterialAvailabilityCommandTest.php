<?php

use App\Console\Commands\BackfillStoreMaterialAvailabilityCommand;
use App\Models\Brick;
use App\Models\StoreLocation;
use App\Models\StoreMaterialAvailability;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

uses(RefreshDatabase::class);

test('backfill store material availability command creates missing availability links from store_location_id', function (): void {
    $location = StoreLocation::factory()->create();

    $brickId = DB::table('bricks')->insertGetId([
        'material_name' => 'Bata',
        'brand' => 'Brand Backfill',
        'store_location_id' => $location->id,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    $brick = Brick::query()->findOrFail($brickId);

    $exitCode = Artisan::call(BackfillStoreMaterialAvailabilityCommand::class);

    expect($exitCode)->toBe(0)
        ->and(Artisan::output())->toContain('linked: 1');

    expect(StoreMaterialAvailability::query()
        ->where('store_location_id', $location->id)
        ->where('materialable_type', Brick::class)
        ->where('materialable_id', $brick->id)
        ->exists())->toBeTrue();
});

test('backfill store material availability command supports dry run', function (): void {
    $location = StoreLocation::factory()->create();

    DB::table('bricks')->insert([
        'material_name' => 'Bata',
        'brand' => 'Brand Backfill Dry',
        'store_location_id' => $location->id,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    $exitCode = Artisan::call(BackfillStoreMaterialAvailabilityCommand::class, [
        '--dry-run' => true,
    ]);

    expect($exitCode)->toBe(0)
        ->and(Artisan::output())->toContain('DRY RUN mode aktif');

    expect(StoreMaterialAvailability::query()->count())->toBe(0);
});
