<?php

use App\Models\Brick;
use App\Models\Cement;
use App\Models\MaterialSetting;
use App\Models\Store;
use App\Models\StoreLocation;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function (): void {
    config()->set('supply_security.trusted_callers', [
        'supply-fe' => 'supply-fe-test-token',
    ]);
});

test('store locations api supports index create show update and delete', function () {
    $store = Store::factory()->create();
    $location = StoreLocation::factory()->create([
        'store_id' => $store->id,
        'address' => 'Jl. Lokasi Lama',
    ]);

    $this->withHeaders(trustedLocationHeaders())
        ->getJson("/api/v1/stores/{$store->id}/locations")
        ->assertOk()
        ->assertJsonPath('data.0.id', $location->id)
        ->assertJsonPath('data.0.address', 'Jl. Lokasi Lama');

    $createResponse = $this->withHeaders(trustedLocationHeaders())
        ->postJson("/api/v1/stores/{$store->id}/locations", [
            'address' => 'Jl. Lokasi Baru',
            'city' => 'Bogor',
            'province' => 'Jawa Barat',
        ]);

    $locationId = $createResponse->json('data.id');

    $createResponse->assertCreated()
        ->assertJsonPath('data.address', 'Jl. Lokasi Baru')
        ->assertJsonMissingPath('data.service_radius_km');

    $this->withHeaders(trustedLocationHeaders())
        ->getJson("/api/v1/stores/{$store->id}/locations/{$locationId}")
        ->assertOk()
        ->assertJsonPath('data.id', $locationId);

    $this->withHeaders(trustedLocationHeaders())
        ->putJson("/api/v1/stores/{$store->id}/locations/{$locationId}", [
            'address' => 'Jl. Lokasi Update',
            'city' => 'Depok',
            'province' => 'Jawa Barat',
        ])
        ->assertOk()
        ->assertJsonPath('data.address', 'Jl. Lokasi Update')
        ->assertJsonPath('data.city', 'Depok');

    $this->withHeaders(trustedLocationHeaders())
        ->deleteJson("/api/v1/stores/{$store->id}/locations/{$locationId}")
        ->assertOk()
        ->assertJsonPath('message', 'Store location deleted successfully');

    $this->assertDatabaseMissing('store_locations', [
        'id' => $locationId,
    ]);
});

test('updating a store location syncs linked material snapshots', function () {
    $store = Store::factory()->create([
        'name' => 'TB Material Sync',
    ]);
    $location = StoreLocation::factory()->create([
        'store_id' => $store->id,
        'address' => 'Jl. Alamat Lama',
    ]);
    $brick = Brick::factory()->create([
        'store' => 'TB Material Sync',
        'address' => 'Jl. Alamat Lama',
        'store_location_id' => $location->id,
    ]);

    $this->withHeaders(trustedLocationHeaders())
        ->putJson("/api/v1/stores/{$store->id}/locations/{$location->id}", [
            'address' => 'Jl. Alamat Baru',
            'city' => 'Bogor',
            'province' => 'Jawa Barat',
        ])
        ->assertOk()
        ->assertJsonPath('data.address', 'Jl. Alamat Baru');

    expect($brick->fresh()->address)->toBe('Jl. Alamat Baru')
        ->and($brick->store)->toBe('TB Material Sync');
});

test('store location materials endpoint returns grouped material availability ordered by settings', function () {
    MaterialSetting::query()->updateOrCreate(
        ['material_type' => 'brick'],
        ['is_visible' => true, 'display_order' => 2],
    );
    MaterialSetting::query()->updateOrCreate(
        ['material_type' => 'cement'],
        ['is_visible' => true, 'display_order' => 1],
    );

    $store = Store::factory()->create([
        'name' => 'TB Grouped',
    ]);
    $location = StoreLocation::factory()->create([
        'store_id' => $store->id,
    ]);
    $brick = Brick::factory()->create([
        'brand' => 'Brick Alpha',
        'type' => 'Roster',
        'store_location_id' => $location->id,
    ]);
    $cement = Cement::factory()->create([
        'brand' => 'Cement Bravo',
        'type' => 'Portland',
        'cement_name' => 'Cement Bravo Portland',
        'store_location_id' => $location->id,
    ]);

    $this->withHeaders(trustedLocationHeaders())
        ->getJson("/api/v1/stores/{$store->id}/locations/{$location->id}/materials")
        ->assertOk()
        ->assertJsonPath('data.0.type', 'cement')
        ->assertJsonPath('data.0.count', 1)
        ->assertJsonPath('data.0.items.0.label', 'Cement Bravo Portland')
        ->assertJsonPath('data.1.type', 'brick')
        ->assertJsonPath('data.1.items.0.label', 'Brick Alpha Roster');
});

function trustedLocationHeaders(): array
{
    return [
        'X-Service-Name' => 'supply-fe',
        'X-Service-Token' => 'supply-fe-test-token',
    ];
}
