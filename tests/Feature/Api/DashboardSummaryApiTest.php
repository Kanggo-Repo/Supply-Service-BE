<?php

use App\Models\Brick;
use App\Models\Cat;
use App\Models\Cement;
use App\Models\Ceramic;
use App\Models\Nat;
use App\Models\Sand;
use App\Models\Store;
use App\Models\Unit;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function (): void {
    config()->set('supply_security.trusted_callers', [
        'platform-service-be' => 'platform-be-test-token',
    ]);
});

test('dashboard summary exposes real supply counts chart and recent activities', function (): void {
    Store::factory()->count(2)->create();
    collect(range(1, 3))->each(fn (int $index) => Unit::query()->create([
        'code' => "U{$index}",
        'name' => "Unit {$index}",
        'package_weight' => 1.0 * $index,
        'description' => "Unit {$index}",
    ]));

    Brick::query()->create([
        'brand' => 'Bata Alpha',
        'type' => 'Roster',
        'created_at' => now()->subMinutes(10),
        'updated_at' => now()->subMinutes(10),
    ]);
    Cat::query()->create([
        'cat_name' => 'Avian Merah Hati',
        'brand' => 'Avian',
        'color_name' => 'Merah Hati',
        'created_at' => now()->subMinutes(9),
        'updated_at' => now()->subMinutes(9),
    ]);
    Cement::query()->create([
        'cement_name' => 'Semen Tiga Roda PCC',
        'brand' => 'Semen Tiga Roda',
        'type' => 'PCC',
        'created_at' => now()->subMinutes(8),
        'updated_at' => now()->subMinutes(8),
    ]);
    Nat::query()->create([
        'brand' => 'AM',
        'nat_name' => 'White',
        'type' => 'Nat',
        'created_at' => now()->subMinutes(7),
        'updated_at' => now()->subMinutes(7),
    ]);
    Sand::query()->create([
        'sand_name' => 'Pasir Laut Halus',
        'brand' => 'Pasir Laut',
        'type' => 'Halus',
        'created_at' => now()->subMinutes(6),
        'updated_at' => now()->subMinutes(6),
    ]);
    Ceramic::query()->create([
        'material_name' => 'Roman Glossy',
        'brand' => 'Roman',
        'type' => 'Glossy',
        'created_at' => now()->subMinutes(5),
        'updated_at' => now()->subMinutes(5),
    ]);

    $this->withHeaders([
        'X-Service-Name' => 'platform-service-be',
        'X-Service-Token' => 'platform-be-test-token',
    ])->getJson('/api/v1/dashboard-summary')
        ->assertOk()
        ->assertJsonPath('data.material_count', 6)
        ->assertJsonPath('data.unit_count', 3)
        ->assertJsonPath('data.store_count', 2)
        ->assertJsonPath('data.chart_data.labels.0', 'Bata')
        ->assertJsonPath('data.chart_data.data.0', 1)
        ->assertJsonPath('data.chart_data.data.5', 1)
        ->assertJsonCount(5, 'data.recent_activities');
});
