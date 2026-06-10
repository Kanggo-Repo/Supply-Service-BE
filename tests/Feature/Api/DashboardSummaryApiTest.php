<?php

use App\Models\Brick;
use App\Models\Cat;
use App\Models\Cement;
use App\Models\Ceramic;
use App\Models\Nat;
use App\Models\Paku;
use App\Models\Sand;
use App\Models\Steel;
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
    Steel::query()->create([
        'material_name' => 'Besi Beton SNI',
        'brand' => 'Master Steel',
        'type' => 'Ulir',
        'created_at' => now()->subMinutes(4),
        'updated_at' => now()->subMinutes(4),
    ]);
    Paku::query()->create([
        'material_name' => 'Paku 5cm',
        'brand' => 'Kenmaster',
        'type' => 'Beton',
        'created_at' => now()->subMinutes(3),
        'updated_at' => now()->subMinutes(3),
    ]);

    $this->withHeaders([
        'X-Service-Name' => 'platform-service-be',
        'X-Service-Token' => 'platform-be-test-token',
    ])->getJson('/api/v1/dashboard-summary')
        ->assertOk()
        // Counts every registered material family (incl. nat, steel, paku, ...),
        // matching the supply material catalog summary grand total.
        ->assertJsonPath('data.material_count', 8)
        ->assertJsonPath('data.unit_count', 3)
        ->assertJsonPath('data.store_count', 2)
        ->assertJsonPath('data.chart_data.labels.0', 'Bata')
        ->assertJsonPath('data.chart_data.data.0', 1)
        // Semen folds nat into cement (1 cement + 1 nat).
        ->assertJsonPath('data.chart_data.labels.2', 'Semen')
        ->assertJsonPath('data.chart_data.data.2', 2)
        ->assertJsonPath('data.chart_data.labels.5', 'Besi')
        ->assertJsonPath('data.chart_data.data.5', 1)
        ->assertJsonCount(5, 'data.recent_activities');
});
