<?php

use App\Models\MaterialSetting;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function (): void {
    config()->set('supply_security.trusted_callers', [
        'supply-service-fe' => 'supply-fe-test-token',
    ]);
});

test('material settings endpoint returns ordered settings with labels', function (): void {
    $response = $this
        ->withHeaders(trustedSettingsHeaders())
        ->getJson('/api/v1/material-settings');

    $response->assertOk()
        ->assertJsonPath('data.0.material_type', 'brick')
        ->assertJsonPath('data.0.label', 'Bata')
        ->assertJsonPath('data.1.material_type', 'cat');
});

test('material settings endpoint upserts settings in bulk', function (): void {
    $response = $this
        ->withHeaders(trustedSettingsHeaders())
        ->putJson('/api/v1/material-settings', [
            'items' => [
                [
                    'material_type' => 'brick',
                    'is_visible' => false,
                    'display_order' => 10,
                ],
                [
                    'material_type' => 'steel',
                    'is_visible' => true,
                    'display_order' => 4,
                ],
            ],
        ]);

    $response->assertOk()
        ->assertJsonPath('message', 'Material settings updated successfully')
        ->assertJsonPath('data.0.material_type', 'cat')
        ->assertJsonPath('data.3.material_type', 'steel');

    $this->assertDatabaseHas('material_settings', [
        'material_type' => 'brick',
        'is_visible' => 0,
        'display_order' => 10,
    ]);

    $this->assertDatabaseHas('material_settings', [
        'material_type' => 'steel',
        'is_visible' => 1,
        'display_order' => 4,
    ]);

    expect(MaterialSetting::query()->count())->toBe(5);
});

function trustedSettingsHeaders(): array
{
    return [
        'X-Service-Name' => 'supply-service-fe',
        'X-Service-Token' => 'supply-fe-test-token',
    ];
}
