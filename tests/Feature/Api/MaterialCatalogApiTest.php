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
    Brick::factory()->count(2)->create();
    Cement::factory()->count(3)->create();
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
        ->assertJsonPath('data.display_families.cement', 7)
        ->assertJsonPath('data.grand_total', 9);
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

function trustedCatalogHeaders(): array
{
    return [
        'X-Service-Name' => 'supply-service-fe',
        'X-Service-Token' => 'supply-fe-test-token',
    ];
}
