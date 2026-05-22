<?php

use App\Models\Brick;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function (): void {
    config()->set('supply_security.trusted_callers', [
        'supply-fe' => 'supply-fe-test-token',
    ]);
});

test('material api rejects invalid sort direction and sort column', function (): void {
    Brick::factory()->create([
        'brand' => 'Amanah Brick',
    ]);

    $this->withHeaders(trustedMaterialHardeningHeaders())
        ->getJson('/api/v1/materials/brick?sortBy=brand&sortDirection=sideways')
        ->assertUnprocessable()
        ->assertJsonValidationErrors(['sortDirection']);

    $this->withHeaders(trustedMaterialHardeningHeaders())
        ->getJson('/api/v1/materials/brick?sortBy=not_a_real_column&sortDirection=asc')
        ->assertUnprocessable()
        ->assertJsonValidationErrors(['sortBy']);
});

test('material api rejects empty payloads and prohibited fields', function (): void {
    $brick = Brick::factory()->create([
        'brand' => 'Benteng Brick',
    ]);

    $this->withHeaders(trustedMaterialHardeningHeaders())
        ->postJson('/api/v1/materials/brick', [])
        ->assertUnprocessable()
        ->assertJsonValidationErrors(['payload']);

    $this->withHeaders(trustedMaterialHardeningHeaders())
        ->putJson("/api/v1/materials/brick/{$brick->id}", [])
        ->assertUnprocessable()
        ->assertJsonValidationErrors(['payload']);

    $this->withHeaders(trustedMaterialHardeningHeaders())
        ->putJson("/api/v1/materials/brick/{$brick->id}", [
            'brand' => 'Benteng Update',
            'deleted_by' => 999,
        ])
        ->assertUnprocessable()
        ->assertJsonValidationErrors(['deleted_by']);

    $this->assertDatabaseHas('bricks', [
        'id' => $brick->id,
        'brand' => 'Benteng Brick',
        'deleted_by' => null,
    ]);
});

function trustedMaterialHardeningHeaders(): array
{
    return [
        'X-Service-Name' => 'supply-fe',
        'X-Service-Token' => 'supply-fe-test-token',
    ];
}
