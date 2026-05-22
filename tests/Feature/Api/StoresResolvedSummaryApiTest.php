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

test('stores api summarizes resolved locations and material counts', function (): void {
    $store = Store::factory()->create([
        'name' => 'TB. Sarana Indah 2',
    ]);

    $staleLocation = StoreLocation::factory()->create([
        'store_id' => $store->id,
        'address' => 'Jalan Pagedangan Raya 2',
        'place_id' => 'place-123',
        'formatted_address' => null,
        'city' => null,
        'province' => null,
        'latitude' => null,
        'longitude' => null,
    ]);

    $resolvedLocation = StoreLocation::factory()->create([
        'store_id' => $store->id,
        'address' => 'Jalan Pagedangan Raya 2',
        'formatted_address' => 'Jl. Pagedangan Raya No.2, Pagedangan, Kec. Pagedangan, Kabupaten Tangerang, Banten 15339, Indonesia',
        'city' => 'Kabupaten Tangerang',
        'province' => 'Banten',
        'latitude' => -6.2901,
        'longitude' => 106.6285,
        'place_id' => 'place-123',
    ]);

    Brick::factory()->create([
        'brand' => 'Brand A',
        'type' => 'Press',
        'store' => $store->name,
        'address' => $staleLocation->address,
        'store_location_id' => $staleLocation->id,
    ]);

    Brick::factory()->create([
        'brand' => 'Brand B',
        'type' => 'Ringan',
        'store' => $store->name,
        'address' => $resolvedLocation->formatted_address,
        'store_location_id' => $resolvedLocation->id,
    ]);

    $this->withHeaders(trustedStoreSummaryHeaders())
        ->getJson('/api/v1/stores?search=Sarana')
        ->assertOk()
        ->assertJsonPath('data.0.id', $store->id)
        ->assertJsonPath('data.0.location_count', 2)
        ->assertJsonPath('data.0.material_availability_count', 2);

    $this->withHeaders(trustedStoreSummaryHeaders())
        ->getJson("/api/v1/stores/{$store->id}")
        ->assertOk()
        ->assertJsonPath('data.id', $store->id)
        ->assertJsonPath('data.material_availability_count', 2)
        ->assertJsonPath('data.locations.1.resolved_address', 'Jl. Pagedangan Raya No.2, Pagedangan, Kec. Pagedangan, Kabupaten Tangerang, Banten 15339, Indonesia');
});

function trustedStoreSummaryHeaders(): array
{
    return [
        'X-Service-Name' => 'supply-fe',
        'X-Service-Token' => 'supply-fe-test-token',
    ];
}
