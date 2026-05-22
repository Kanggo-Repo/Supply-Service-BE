<?php

use App\Models\Store;
use App\Models\StoreLocation;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function (): void {
    config()->set('supply_security.trusted_callers', [
        'supply-fe' => 'supply-fe-test-token',
    ]);
});

test('locations by store prefers the most complete location candidates', function () {
    $store = Store::factory()->create([
        'name' => 'TB. Sarana Indah 2',
    ]);

    StoreLocation::factory()->create([
        'store_id' => $store->id,
        'address' => 'Pagedangan, Kec. Pagedangan, Kab. Tangerang',
        'formatted_address' => null,
        'latitude' => null,
        'longitude' => null,
        'city' => null,
        'province' => null,
    ]);

    $resolvedLocation = StoreLocation::factory()->create([
        'store_id' => $store->id,
        'address' => 'Jalan Pagedangan Raya 2',
        'city' => 'Kabupaten Tangerang',
        'province' => 'Banten',
        'formatted_address' => 'Jalan Pagedangan Raya 2, Kabupaten Tangerang, Banten',
        'latitude' => -6.2901,
        'longitude' => 106.6285,
    ]);

    $this->withHeaders(trustedSearchHeaders())
        ->getJson('/api/v1/store-search/locations-by-store?store='.urlencode($store->name))
        ->assertOk()
        ->assertJsonCount(1)
        ->assertJsonPath('0.id', $resolvedLocation->id);
});

test('store search quick create requires explicit location selection when store has multiple valid locations', function () {
    $store = Store::factory()->create([
        'name' => 'TB Multi Lokasi',
    ]);

    StoreLocation::factory()->count(2)->create([
        'store_id' => $store->id,
        'city' => 'Tangerang',
        'province' => 'Banten',
        'formatted_address' => null,
    ]);

    $this->withHeaders(trustedSearchHeaders())
        ->postJson('/api/v1/store-search/quick-create', [
            'input' => $store->name,
        ])
        ->assertStatus(422)
        ->assertJsonPath('requires_location_selection', true)
        ->assertJsonCount(2, 'locations');
});

test('store search quick create reuses existing exact address or creates a new location', function () {
    $store = Store::factory()->create([
        'name' => 'TB. An-An',
    ]);
    $location = StoreLocation::factory()->create([
        'store_id' => $store->id,
        'address' => 'Jl. Raya Serpong No. 1',
        'city' => 'Tangerang Selatan',
        'province' => 'Banten',
        'formatted_address' => 'Jl. Raya Serpong No. 1, Tangerang Selatan, Banten',
    ]);

    $this->withHeaders(trustedSearchHeaders())
        ->postJson('/api/v1/store-search/quick-create', [
            'input' => $store->name.' - '.$location->address,
        ])
        ->assertOk()
        ->assertJsonPath('id', $location->id)
        ->assertJsonPath('is_new', false);

    $this->withHeaders(trustedSearchHeaders())
        ->postJson('/api/v1/store-search/quick-create', [
            'input' => 'TB. An-An - Jl. Lokasi Baru',
        ])
        ->assertOk()
        ->assertJsonPath('store_name', 'TB. An-An')
        ->assertJsonPath('address', 'Jl. Lokasi Baru')
        ->assertJsonPath('is_new', true);
});

test('store search endpoints return store names addresses and display matches', function () {
    $store = Store::factory()->create([
        'name' => 'TB Search',
    ]);
    $location = StoreLocation::factory()->create([
        'store_id' => $store->id,
        'address' => 'Jl. Pagedangan Raya 2',
        'city' => 'Kabupaten Tangerang',
        'province' => 'Banten',
        'formatted_address' => 'Jl. Pagedangan Raya No.2, Pagedangan, Kabupaten Tangerang, Banten',
    ]);

    $this->withHeaders(trustedSearchHeaders())
        ->getJson('/api/v1/store-search/all-stores?search=TB')
        ->assertOk()
        ->assertJsonFragment(['TB Search']);

    $this->withHeaders(trustedSearchHeaders())
        ->getJson('/api/v1/store-search/addresses-by-store?store='.urlencode($store->name))
        ->assertOk()
        ->assertJsonFragment([$location->formatted_address]);

    $this->withHeaders(trustedSearchHeaders())
        ->getJson('/api/v1/store-search/search?q='.urlencode('TB Search - Jl. Pagedangan'))
        ->assertOk()
        ->assertJsonPath('0.store_name', 'TB Search')
        ->assertJsonPath('0.resolved_address', $location->formatted_address);
});

function trustedSearchHeaders(): array
{
    return [
        'X-Service-Name' => 'supply-fe',
        'X-Service-Token' => 'supply-fe-test-token',
    ];
}
