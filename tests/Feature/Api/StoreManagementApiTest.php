<?php

use App\Models\Brick;
use App\Models\Store;
use App\Models\StoreLocation;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function (): void {
    config()->set('supply_security.trusted_callers', [
        'supply-fe' => 'supply-fe-test-token',
    ]);
});

test('stores api supports index create show update and delete', function () {
    $store = Store::factory()->create([
        'name' => 'TB Lama',
    ]);
    StoreLocation::factory()->create([
        'store_id' => $store->id,
    ]);

    $this->withHeaders(trustedStoreHeaders())
        ->getJson('/api/v1/stores?search=TB')
        ->assertOk()
        ->assertJsonPath('data.0.id', $store->id)
        ->assertJsonPath('data.0.name', 'TB Lama')
        ->assertJsonPath('data.0.location_count', 1);

    $createResponse = $this->withHeaders(trustedStoreHeaders())
        ->postJson('/api/v1/stores', [
            'name' => 'TB Baru',
        ]);

    $createdStoreId = $createResponse->json('data.id');

    $createResponse->assertCreated()
        ->assertJsonPath('data.name', 'TB Baru');

    $this->withHeaders(trustedStoreHeaders())
        ->getJson("/api/v1/stores/{$store->id}")
        ->assertOk()
        ->assertJsonPath('data.id', $store->id)
        ->assertJsonPath('data.location_count', 1)
        ->assertJsonCount(1, 'data.locations');

    $this->withHeaders(trustedStoreHeaders())
        ->putJson("/api/v1/stores/{$createdStoreId}", [
            'name' => 'TB Baru Update',
        ])
        ->assertOk()
        ->assertJsonPath('data.name', 'TB Baru Update');

    $this->withHeaders(trustedStoreHeaders())
        ->deleteJson("/api/v1/stores/{$createdStoreId}")
        ->assertOk()
        ->assertJsonPath('message', 'Store deleted successfully');

    $this->assertDatabaseMissing('stores', [
        'id' => $createdStoreId,
    ]);
});

test('renaming a store syncs linked material snapshot names', function () {
    $store = Store::factory()->create([
        'name' => 'TB Snapshot Lama',
    ]);
    $location = StoreLocation::factory()->create([
        'store_id' => $store->id,
        'address' => 'Jl. Snapshot No. 1',
    ]);
    $brick = Brick::factory()->create([
        'store' => 'TB Snapshot Lama',
        'address' => 'Jl. Snapshot No. 1',
        'store_location_id' => $location->id,
    ]);

    $this->withHeaders(trustedStoreHeaders())
        ->putJson("/api/v1/stores/{$store->id}", [
            'name' => 'TB Snapshot Baru',
        ])
        ->assertOk()
        ->assertJsonPath('data.name', 'TB Snapshot Baru');

    expect($brick->fresh()->store)->toBe('TB Snapshot Baru');
});

function trustedStoreHeaders(): array
{
    return [
        'X-Service-Name' => 'supply-fe',
        'X-Service-Token' => 'supply-fe-test-token',
    ];
}
