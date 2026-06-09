<?php

use App\Models\Brick;
use App\Models\Cement;
use App\Models\Nat;
use App\Models\StoreLocation;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function (): void {
    config()->set('supply_security.trusted_callers', [
        'supply-service-fe' => 'supply-fe-test-token',
    ]);
});

test('material catalog endpoints support family list detail create update and delete', function (): void {
    $location = StoreLocation::factory()->create();
    $brick = Brick::factory()->create([
        'brand' => 'Alpha Brick',
        'type' => 'Roster',
        'form' => 'Berlubang',
    ]);
    Cement::factory()->create([
        'brand' => 'Bravo Cement',
        'type' => 'Portland',
        'cement_name' => 'Bravo Cement Portland',
    ]);

    $indexResponse = $this
        ->withHeaders(trustedCatalogHeaders())
        ->getJson('/api/v1/materials/brick?search=Alpha&sortBy=brand&sortDirection=asc&perPage=10');

    $indexResponse->assertOk()
        ->assertJsonPath('data.0.id', $brick->id)
        ->assertJsonPath('data.0.family', 'brick')
        ->assertJsonPath('data.0.label', 'Alpha Brick Roster')
        ->assertJsonPath('total', 1);

    $showResponse = $this
        ->withHeaders(trustedCatalogHeaders())
        ->getJson("/api/v1/materials/brick/{$brick->id}");

    $showResponse->assertOk()
        ->assertJsonPath('data.id', $brick->id)
        ->assertJsonPath('data.family', 'brick')
        ->assertJsonPath('data.form', 'Berlubang');

    $createResponse = $this
        ->withHeaders(trustedCatalogHeaders())
        ->postJson('/api/v1/materials/brick', [
            'brand' => 'Charlie Brick',
            'type' => 'Tempel',
            'form' => 'Persegi',
            'dimension_length' => 21,
            'dimension_width' => 10,
            'dimension_height' => 5,
            'price_per_piece' => 1500,
            'store_location_id' => $location->id,
        ]);

    $createResponse->assertCreated()
        ->assertJsonPath('data.family', 'brick')
        ->assertJsonPath('data.brand', 'Charlie Brick')
        ->assertJsonPath('data.store_location_id', $location->id);

    $createdId = $createResponse->json('data.id');

    $this->assertDatabaseHas('bricks', [
        'id' => $createdId,
        'brand' => 'Charlie Brick',
        'type' => 'Tempel',
        'store_location_id' => $location->id,
    ]);

    $updateResponse = $this
        ->withHeaders(trustedCatalogHeaders())
        ->putJson("/api/v1/materials/brick/{$createdId}", [
            'form' => 'Roster',
            'price_per_piece' => 1700,
        ]);

    $updateResponse->assertOk()
        ->assertJsonPath('data.form', 'Roster')
        ->assertJsonPath('data.price_per_piece', 1700);

    $deleteResponse = $this
        ->withHeaders(trustedCatalogHeaders())
        ->deleteJson("/api/v1/materials/brick/{$createdId}");

    $deleteResponse->assertOk()
        ->assertJsonPath('message', 'Material deleted successfully');

    $this->assertSoftDeleted('bricks', [
        'id' => $createdId,
    ]);
});

test('material catalog summary returns family and display totals', function (): void {
    Brick::factory()->create([
        'brand' => 'Alpha Brick',
    ]);
    Brick::factory()->create([
        'brand' => 'Charlie Brick',
    ]);
    Cement::factory()->create([
        'brand' => 'Bravo Cement',
        'type' => 'Portland',
        'cement_name' => 'Bravo Cement Portland',
    ]);
    Cement::factory()->create([
        'brand' => 'Beta Cement',
        'type' => 'Masonry',
        'cement_name' => 'Beta Cement Masonry',
    ]);
    Cement::factory()->create([
        'brand' => 'Bima Cement',
        'type' => 'Instant',
        'cement_name' => 'Bima Cement Instant',
    ]);
    collect(range(1, 4))->each(fn (int $index) => Nat::query()->create([
        'nat_name' => "Nat {$index}",
        'brand' => "Brand {$index}",
        'type' => 'Nat',
    ]));

    $response = $this
        ->withHeaders(trustedCatalogHeaders())
        ->getJson('/api/v1/materials/summary');

    $response->assertOk()
        ->assertJsonPath('data.families.brick', 2)
        ->assertJsonPath('data.families.cement', 3)
        ->assertJsonPath('data.families.nat', 4)
        ->assertJsonPath('data.family_letters.brick.0', 'A')
        ->assertJsonPath('data.family_letters.brick.1', 'C')
        ->assertJsonPath('data.display_letters.cement.0', 'B')
        ->assertJsonPath('data.display_families.cement', 7)
        ->assertJsonPath('data.grand_total', 9);
});

test('material catalog creates a cat material without an explicit cat_name', function (): void {
    $location = StoreLocation::factory()->create();

    $createResponse = $this
        ->withHeaders(trustedCatalogHeaders())
        ->postJson('/api/v1/materials/cat', [
            'type' => 'Tembok',
            'brand' => 'Avian',
            'sub_brand' => 'No Drop',
            'color_code' => 'A-101',
            'color_name' => 'Putih',
            'package_unit' => 'Galon',
            'package_weight_gross' => 5.5,
            'package_weight_net' => 5,
            'volume' => 4,
            'purchase_price' => 250000,
            'comparison_price_per_kg' => 50000,
            'store_location_id' => $location->id,
        ]);

    $createResponse->assertCreated()
        ->assertJsonPath('data.family', 'cat')
        ->assertJsonPath('data.brand', 'Avian')
        ->assertJsonPath('data.label', 'Avian Tembok');

    $this->assertDatabaseHas('cats', [
        'id' => $createResponse->json('data.id'),
        'brand' => 'Avian',
        'cat_name' => null,
    ]);
});

test('material catalog create and update reject unknown attributes', function (): void {
    $createResponse = $this
        ->withHeaders(trustedCatalogHeaders())
        ->postJson('/api/v1/materials/cement', [
            'brand' => 'Bravo Cement',
            'unknown_field' => 'should fail',
        ]);

    $createResponse->assertUnprocessable()
        ->assertJsonValidationErrors(['unknown_field']);

    $cement = Cement::factory()->create();

    $updateResponse = $this
        ->withHeaders(trustedCatalogHeaders())
        ->putJson("/api/v1/materials/cement/{$cement->id}", [
            'deleted_by' => 99,
        ]);

    $updateResponse->assertUnprocessable()
        ->assertJsonValidationErrors(['deleted_by']);
});

test('material catalog includes map warning metadata for missing store location links and coordinates', function (): void {
    $locationWithoutCoordinates = StoreLocation::factory()->create([
        'latitude' => null,
        'longitude' => null,
    ]);

    $orphanLinkedBrick = Brick::factory()->create([
        'brand' => 'Orphan Brick',
        'type' => 'Roster',
        'store' => 'TB. Orphan',
        'store_location_id' => null,
    ]);

    $coordinateMissingBrick = Brick::factory()->create([
        'brand' => 'Mapless Brick',
        'type' => 'Press',
        'store' => $locationWithoutCoordinates->store->name,
        'store_location_id' => $locationWithoutCoordinates->id,
    ]);

    $this->withHeaders(trustedCatalogHeaders())
        ->getJson("/api/v1/materials/brick/{$orphanLinkedBrick->id}")
        ->assertOk()
        ->assertJsonPath('data.has_missing_map_coordinates', true)
        ->assertJsonPath('data.map_warning_label', 'WAJIB SET MAP')
        ->assertJsonPath('data.map_warning_reason', 'Lokasi toko belum ditautkan ke database store.')
        ->assertJsonPath('data.map_warning_action_context', 'store-search');

    $this->withHeaders(trustedCatalogHeaders())
        ->getJson("/api/v1/materials/brick/{$coordinateMissingBrick->id}")
        ->assertOk()
        ->assertJsonPath('data.has_missing_map_coordinates', true)
        ->assertJsonPath('data.map_warning_label', 'WAJIB ISI TITIK MAP')
        ->assertJsonPath('data.map_warning_reason', 'Koordinat Google Maps toko ini belum diisi.')
        ->assertJsonPath('data.map_warning_action_context', 'store-location-edit')
        ->assertJsonPath('data.map_warning_store_id', $locationWithoutCoordinates->store_id)
        ->assertJsonPath('data.map_warning_store_location_id', $locationWithoutCoordinates->id);
});

function trustedCatalogHeaders(): array
{
    return [
        'X-Service-Name' => 'supply-service-fe',
        'X-Service-Token' => 'supply-fe-test-token',
    ];
}
