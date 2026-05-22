<?php

use App\Models\Unit;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function (): void {
    config()->set('supply_security.trusted_callers', [
        'supply-service-fe' => 'supply-fe-test-token',
    ]);
});

test('unit endpoints support list grouped material types create update and delete', function (): void {
    $createResponse = $this
        ->withHeaders(trustedUnitHeaders())
        ->postJson('/api/v1/units', [
            'code' => 'sak',
            'name' => 'Sak',
            'package_weight' => 40,
            'description' => 'Kemasan sak semen',
            'material_types' => ['cement', 'sand'],
        ]);

    $createResponse->assertCreated()
        ->assertJsonPath('success', true)
        ->assertJsonPath('data.code', 'sak')
        ->assertJsonCount(2, 'data.material_types');

    $unitId = $createResponse->json('data.id');

    $indexResponse = $this
        ->withHeaders(trustedUnitHeaders())
        ->getJson('/api/v1/units?material_type=cement');

    $indexResponse->assertOk()
        ->assertJsonPath('success', true)
        ->assertJsonPath('data.0.id', $unitId);

    $materialTypesResponse = $this
        ->withHeaders(trustedUnitHeaders())
        ->getJson('/api/v1/units/material-types');

    $materialTypesResponse->assertOk()
        ->assertJsonPath('success', true)
        ->assertJsonPath('data.0.value', 'brick');

    $groupedResponse = $this
        ->withHeaders(trustedUnitHeaders())
        ->getJson('/api/v1/units/grouped');

    $groupedResponse->assertOk()
        ->assertJsonPath('success', true)
        ->assertJsonPath('data.cement.0.id', $unitId)
        ->assertJsonPath('data.sand.0.id', $unitId);

    $updateResponse = $this
        ->withHeaders(trustedUnitHeaders())
        ->putJson("/api/v1/units/{$unitId}", [
            'code' => 'kg',
            'name' => 'Kilogram',
            'package_weight' => 1,
            'description' => 'Kemasan kilogram',
            'material_types' => ['cat'],
        ]);

    $updateResponse->assertOk()
        ->assertJsonPath('data.code', 'kg')
        ->assertJsonCount(1, 'data.material_types')
        ->assertJsonPath('data.material_types.0', 'cat');

    $deleteResponse = $this
        ->withHeaders(trustedUnitHeaders())
        ->deleteJson("/api/v1/units/{$unitId}");

    $deleteResponse->assertOk()
        ->assertJsonPath('success', true);

    $this->assertDatabaseMissing('units', [
        'id' => $unitId,
    ]);
});

test('unit creation validates required payload', function (): void {
    $response = $this
        ->withHeaders(trustedUnitHeaders())
        ->postJson('/api/v1/units', [
            'code' => '',
            'material_types' => [],
        ]);

    $response->assertUnprocessable()
        ->assertJsonValidationErrors(['code', 'material_types', 'name', 'package_weight']);
});

function trustedUnitHeaders(): array
{
    return [
        'X-Service-Name' => 'supply-service-fe',
        'X-Service-Token' => 'supply-fe-test-token',
    ];
}
