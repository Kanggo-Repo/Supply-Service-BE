<?php

use App\Console\Commands\RepairStoreMaterialAvailabilityCommand;
use App\Models\Cement;
use App\Models\Nat;
use App\Models\StoreLocation;
use App\Models\StoreMaterialAvailability;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

uses(RefreshDatabase::class);

test('repair store material availability command normalizes legacy nat links into cement links', function (): void {
    $location = StoreLocation::factory()->create();

    $cementId = DB::table('cements')->insertGetId([
        'cement_name' => 'Nat Legacy',
        'brand' => 'AM',
        'type' => 'Nat',
        'store_location_id' => $location->id,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    StoreMaterialAvailability::query()->create([
        'store_location_id' => $location->id,
        'materialable_type' => Nat::class,
        'materialable_id' => $cementId,
    ]);

    $exitCode = Artisan::call(RepairStoreMaterialAvailabilityCommand::class);

    expect($exitCode)->toBe(0)
        ->and(Artisan::output())->toContain('normalized: 1');

    expect(StoreMaterialAvailability::query()
        ->where('store_location_id', $location->id)
        ->where('materialable_type', Cement::class)
        ->where('materialable_id', $cementId)
        ->exists())->toBeTrue();

    expect(StoreMaterialAvailability::query()
        ->where('materialable_type', Nat::class)
        ->exists())->toBeFalse();
});

test('repair store material availability command removes duplicate legacy nat links when cement link already exists', function (): void {
    $location = StoreLocation::factory()->create();

    $cementId = DB::table('cements')->insertGetId([
        'cement_name' => 'Nat Duplicate',
        'brand' => 'AM',
        'type' => 'Nat',
        'store_location_id' => $location->id,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    StoreMaterialAvailability::query()->create([
        'store_location_id' => $location->id,
        'materialable_type' => Cement::class,
        'materialable_id' => $cementId,
    ]);

    StoreMaterialAvailability::query()->create([
        'store_location_id' => $location->id,
        'materialable_type' => Nat::class,
        'materialable_id' => $cementId,
    ]);

    $exitCode = Artisan::call(RepairStoreMaterialAvailabilityCommand::class);

    expect($exitCode)->toBe(0)
        ->and(Artisan::output())->toContain('deduplicated: 1');

    expect(StoreMaterialAvailability::query()
        ->where('store_location_id', $location->id)
        ->where('materialable_id', $cementId)
        ->count())->toBe(1);
});

test('repair store material availability command prunes orphan links', function (): void {
    $location = StoreLocation::factory()->create();

    StoreMaterialAvailability::query()->create([
        'store_location_id' => $location->id,
        'materialable_type' => Cement::class,
        'materialable_id' => 9999,
    ]);

    $exitCode = Artisan::call(RepairStoreMaterialAvailabilityCommand::class);

    expect($exitCode)->toBe(0)
        ->and(Artisan::output())->toContain('deleted_orphans=1');

    expect(StoreMaterialAvailability::query()->count())->toBe(0);
});
