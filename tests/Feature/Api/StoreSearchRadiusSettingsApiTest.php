<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function (): void {
    config()->set('supply_security.trusted_callers', [
        'supply-service-fe' => 'supply-fe-test-token',
    ]);
});

test('store search radius settings endpoint returns defaults when settings are empty', function (): void {
    $response = $this
        ->withHeaders(trustedRadiusHeaders())
        ->getJson('/api/v1/settings/store-search-radius');

    $response->assertOk()
        ->assertJsonPath('data.project_store_radius_default_km', 10)
        ->assertJsonPath('data.project_store_radius_final_km', 15);
});

test('store search radius settings endpoint updates owner settings', function (): void {
    $response = $this
        ->withHeaders(trustedRadiusHeaders())
        ->putJson('/api/v1/settings/store-search-radius', [
            'project_store_radius_default_km' => 12.5,
            'project_store_radius_final_km' => 20,
        ]);

    $response->assertOk()
        ->assertJsonPath('message', 'Store search radius updated successfully')
        ->assertJsonPath('data.project_store_radius_default_km', 12.5)
        ->assertJsonPath('data.project_store_radius_final_km', 20);

    $this->assertDatabaseHas('app_settings', [
        'key' => 'project_store_radius_default_km',
        'value' => '12.5',
    ]);
    $this->assertDatabaseHas('app_settings', [
        'key' => 'project_store_radius_final_km',
        'value' => '20',
    ]);
});

function trustedRadiusHeaders(): array
{
    return [
        'X-Service-Name' => 'supply-service-fe',
        'X-Service-Token' => 'supply-fe-test-token',
        'X-Actor-Id' => '77',
        'X-Actor-Name' => 'Radius Operator',
        'X-Actor-Email' => 'radius@example.test',
    ];
}
