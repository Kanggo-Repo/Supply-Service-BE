<?php

use App\Models\Brick;
use App\Models\BrickInstallationType;
use App\Models\Cement;
use App\Models\Ceramic;
use App\Models\MortarFormula;
use App\Models\Store;
use App\Models\StoreLocation;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function (): void {
    config()->set('supply_security.trusted_callers', [
        'calculation-service-be' => 'calc-test-token',
    ]);
});

test('reference endpoints reject requests from untrusted callers', function () {
    $this->getJson('/api/v1/reference/materials')
        ->assertUnauthorized()
        ->assertJsonPath('message', 'Unauthenticated service caller.');
});

test('materials reference returns serialized materials filtered by families', function () {
    $location = StoreLocation::factory()->create();
    $brick = Brick::factory()->create([
        'brand' => 'Alpha Brick',
        'type' => 'Roster',
        'dimension_length' => 20,
        'dimension_width' => 10,
        'dimension_height' => 5,
        'price_per_piece' => 1200,
        'store_location_id' => $location->id,
    ]);
    Cement::factory()->create([
        'brand' => 'Bravo Cement',
        'type' => 'Portland',
        'cement_name' => 'Bravo Cement Portland',
        'package_price' => 72000,
        'store_location_id' => $location->id,
    ]);

    $response = $this
        ->withHeaders(trustedCallerHeaders())
        ->getJson('/api/v1/reference/materials?families[]=brick');

    $response->assertOk()
        ->assertJsonCount(1, 'data')
        ->assertJsonPath('data.0.id', $brick->id)
        ->assertJsonPath('data.0.family', 'brick')
        ->assertJsonPath('data.0.label', 'Alpha Brick Roster')
        ->assertJsonPath('data.0.dimension', '20x10x5')
        ->assertJsonPath('data.0.price', 1200)
        ->assertJsonPath('data.0.store_location_id', $location->id);
});

test('materials reference includes ceramic packaging fields needed by calculation service', function () {
    $location = StoreLocation::factory()->create();
    $ceramic = Ceramic::query()->create([
        'material_name' => 'Keramik',
        'type' => 'HT',
        'brand' => 'Roman',
        'sub_brand' => 'Granit',
        'code' => 'GT612203R',
        'color' => 'dBalsa Pine',
        'dimension_length' => 60,
        'dimension_width' => 15,
        'dimension_thickness' => 1,
        'pieces_per_package' => 12,
        'coverage_per_package' => 1.08,
        'surface' => 'Matt',
        'store_location_id' => $location->id,
        'price_per_package' => 255000,
    ]);

    $response = $this
        ->withHeaders(trustedCallerHeaders())
        ->getJson('/api/v1/reference/materials?families[]=ceramic');

    $response->assertOk()
        ->assertJsonPath('data.0.id', $ceramic->id)
        ->assertJsonPath('data.0.code', 'GT612203R')
        ->assertJsonPath('data.0.surface', 'Matt')
        ->assertJsonPath('data.0.pieces_per_package', 12)
        ->assertJsonPath('data.0.coverage_per_package', 1.08);
});

test('materials by ids groups serialized items by family', function () {
    $location = StoreLocation::factory()->create();
    $brick = Brick::factory()->create([
        'brand' => 'Alpha Brick',
        'type' => 'Roster',
        'store_location_id' => $location->id,
    ]);
    $cement = Cement::factory()->create([
        'brand' => 'Bravo Cement',
        'type' => 'Portland',
        'cement_name' => 'Bravo Cement Portland',
        'store_location_id' => $location->id,
    ]);

    $response = $this
        ->withHeaders(trustedCallerHeaders())
        ->postJson('/api/v1/reference/materials/by-ids', [
            'items' => [
                [
                    'family' => 'brick',
                    'ids' => [$brick->id],
                ],
                [
                    'family' => 'cement',
                    'ids' => [$cement->id],
                ],
            ],
        ]);

    $response->assertOk()
        ->assertJsonCount(2, 'data')
        ->assertJsonPath('data.0.family', 'brick')
        ->assertJsonPath('data.0.items.0.id', $brick->id)
        ->assertJsonPath('data.1.family', 'cement')
        ->assertJsonPath('data.1.items.0.id', $cement->id);
});

test('materials filter metadata returns unique values for existing fields only', function () {
    Brick::factory()->create([
        'brand' => 'Alpha',
        'type' => 'Roster',
        'form' => 'Berlubang',
    ]);
    Brick::factory()->create([
        'brand' => 'Alpha',
        'type' => 'Roster',
        'form' => 'Persegi',
    ]);

    $response = $this
        ->withHeaders(trustedCallerHeaders())
        ->getJson('/api/v1/reference/materials/filter-metadata?family=brick&fields[]=brand&fields[]=form&fields[]=unknown');

    $response->assertOk()
        ->assertJsonPath('data.family', 'brick')
        ->assertJsonPath('data.fields.brand.0', 'Alpha')
        ->assertJsonPath('data.fields.form.0', 'Berlubang')
        ->assertJsonPath('data.fields.form.1', 'Persegi');

    expect($response->json('data.fields'))->not->toHaveKey('unknown');
});

test('store and location reference endpoints return supply network snapshots', function () {
    $store = Store::factory()->create([
        'name' => 'Supply Hub',
    ]);
    $location = StoreLocation::factory()->create([
        'store_id' => $store->id,
        'address' => 'Jl. Merdeka No. 1',
        'city' => 'Bogor',
        'province' => 'Jawa Barat',
        'latitude' => -6.6,
        'longitude' => 106.8,
    ]);
    $brick = Brick::factory()->create([
        'brand' => 'Alpha Brick',
        'type' => 'Roster',
        'store_location_id' => $location->id,
        'price_per_piece' => 1200,
    ]);
    $storesResponse = $this
        ->withHeaders(trustedCallerHeaders())
        ->getJson('/api/v1/reference/stores');

    $storesResponse->assertOk()
        ->assertJsonPath('data.0.id', $store->id)
        ->assertJsonPath('data.0.location_count', 1);

    $locationsResponse = $this
        ->withHeaders(trustedCallerHeaders())
        ->getJson("/api/v1/reference/stores/{$store->id}/locations");

    $locationsResponse->assertOk()
        ->assertJsonPath('data.0.id', $location->id)
        ->assertJsonPath('data.0.address', 'Jl. Merdeka No. 1, Bogor, Jawa Barat')
        ->assertJsonPath('data.0.material_availabilities_count', 1);

    $referenceLocationsResponse = $this
        ->withHeaders(trustedCallerHeaders())
        ->getJson('/api/v1/reference/locations');

    $referenceLocationsResponse->assertOk()
        ->assertJsonPath('data.0.id', $location->id)
        ->assertJsonPath('data.0.store_name', 'Supply Hub')
        ->assertJsonMissingPath('data.0.service_radius_km');
});

test('location availability endpoints return serialized materials for single and bulk lookups', function () {
    $location = StoreLocation::factory()->create();
    $brick = Brick::factory()->create([
        'brand' => 'Alpha Brick',
        'type' => 'Roster',
        'price_per_piece' => 1200,
        'store_location_id' => $location->id,
    ]);
    $cement = Cement::factory()->create([
        'brand' => 'Bravo Cement',
        'type' => 'Portland',
        'cement_name' => 'Bravo Cement Portland',
        'package_price' => 72000,
        'store_location_id' => $location->id,
    ]);

    $singleResponse = $this
        ->withHeaders(trustedCallerHeaders())
        ->getJson("/api/v1/reference/locations/{$location->id}/availability");

    $singleResponse->assertOk()
        ->assertJsonPath('data.location_id', $location->id)
        ->assertJsonCount(2, 'data.materials');

    $bulkResponse = $this
        ->withHeaders(trustedCallerHeaders())
        ->postJson('/api/v1/reference/locations/availability/bulk', [
            'location_ids' => [$location->id],
        ]);

    $bulkResponse->assertOk()
        ->assertJsonPath('data.0.location_id', $location->id)
        ->assertJsonCount(2, 'data.0.materials');
});

test('brick installation types reference returns active types ordered for calculation consumers', function () {
    BrickInstallationType::query()->create([
        'name' => '1 Bata',
        'code' => 'one',
        'description' => 'Posisi tidur horizontal.',
        'mortar_volume_per_m2' => 0.045,
        'waste_factor' => 1.5,
        'visible_side_width' => 'width',
        'visible_side_height' => 'height',
        'orientation' => 'horizontal_lying',
        'bricks_per_sqm' => 72.5,
        'is_active' => true,
        'display_order' => 2,
    ]);

    BrickInstallationType::query()->create([
        'name' => '1/2 Bata',
        'code' => 'half',
        'description' => 'Posisi tidur horizontal.',
        'mortar_volume_per_m2' => 0.032,
        'waste_factor' => 1.727273,
        'visible_side_width' => 'length',
        'visible_side_height' => 'height',
        'orientation' => 'horizontal_lying',
        'bricks_per_sqm' => 90.5,
        'is_active' => true,
        'display_order' => 1,
    ]);

    BrickInstallationType::query()->create([
        'name' => 'Arsip',
        'code' => 'archived',
        'visible_side_width' => 'length',
        'visible_side_height' => 'height',
        'orientation' => 'horizontal_lying',
        'is_active' => false,
        'display_order' => 0,
    ]);

    $response = $this
        ->withHeaders(trustedCallerHeaders())
        ->getJson('/api/v1/reference/brick-installation-types');

    $response->assertOk()
        ->assertJsonCount(2, 'data')
        ->assertJsonPath('data.0.code', 'half')
        ->assertJsonPath('data.0.bricks_per_sqm', 90.5)
        ->assertJsonPath('data.1.code', 'one');
});

test('mortar formulas reference returns active formulas ordered by default then name', function () {
    MortarFormula::query()->create([
        'name' => 'Adukan 1:5',
        'description' => 'Non-struktural',
        'cement_ratio' => 1,
        'sand_ratio' => 5,
        'water_ratio' => 0.3,
        'cement_kg_per_m3' => 275,
        'sand_m3_per_m3' => 0.89,
        'water_liter_per_m3' => 400,
        'expansion_factor' => 0.15,
        'cement_bag_type' => 'both',
        'is_default' => false,
        'is_active' => true,
    ]);

    MortarFormula::query()->create([
        'name' => 'Adukan 1:4 (Standar)',
        'description' => 'Struktural',
        'cement_ratio' => 1,
        'sand_ratio' => 4,
        'water_ratio' => 0.3,
        'cement_kg_per_m3' => 321.97,
        'sand_m3_per_m3' => 0.8688,
        'water_liter_per_m3' => 347.73,
        'expansion_factor' => 0.15,
        'cement_bag_type' => 'both',
        'is_default' => true,
        'is_active' => true,
    ]);

    MortarFormula::query()->create([
        'name' => 'Arsip',
        'cement_ratio' => 1,
        'sand_ratio' => 6,
        'cement_bag_type' => 'both',
        'is_default' => false,
        'is_active' => false,
    ]);

    $response = $this
        ->withHeaders(trustedCallerHeaders())
        ->getJson('/api/v1/reference/mortar-formulas');

    $response->assertOk()
        ->assertJsonCount(2, 'data')
        ->assertJsonPath('data.0.name', 'Adukan 1:4 (Standar)')
        ->assertJsonPath('data.0.is_default', true)
        ->assertJsonPath('data.1.name', 'Adukan 1:5');
});

function trustedCallerHeaders(): array
{
    return [
        'X-Service-Name' => 'calculation-service-be',
        'X-Service-Token' => 'calc-test-token',
    ];
}
