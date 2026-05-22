<?php

use App\Models\Brick;
use App\Models\MaterialChangeLog;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function (): void {
    config()->set('supply_security.trusted_callers', [
        'supply-service-fe' => 'supply-fe-test-token',
    ]);
});

test('material lifecycle writes audit history and can restore from a selected history snapshot', function (): void {
    $actor = User::factory()->create([
        'name' => 'Supply Operator',
        'email' => 'operator@example.test',
    ]);

    $createResponse = $this
        ->withHeaders(trustedHistoryHeaders($actor))
        ->postJson('/api/v1/materials/brick', [
            'brand' => 'Alpha Brick',
            'type' => 'Roster',
            'form' => 'Persegi',
            'price_per_piece' => 1200,
        ]);

    $createResponse->assertCreated();

    $materialId = $createResponse->json('data.id');
    $createdLog = MaterialChangeLog::query()
        ->where('material_table', 'bricks')
        ->where('material_id', $materialId)
        ->where('action', 'created')
        ->latest('id')
        ->first();

    expect($createdLog)->not->toBeNull()
        ->and($createdLog->user_id)->toBe($actor->id)
        ->and($createdLog->changes['brand']['to'])->toBe('Alpha Brick');

    $updateResponse = $this
        ->withHeaders(trustedHistoryHeaders($actor))
        ->putJson("/api/v1/materials/brick/{$materialId}", [
            'brand' => 'Bravo Brick',
            'price_per_piece' => 1500,
        ]);

    $updateResponse->assertOk()
        ->assertJsonPath('data.brand', 'Bravo Brick')
        ->assertJsonPath('data.price_per_piece', 1500);

    $updateLog = MaterialChangeLog::query()
        ->where('material_table', 'bricks')
        ->where('material_id', $materialId)
        ->where('action', 'updated')
        ->latest('id')
        ->first();

    expect($updateLog)->not->toBeNull()
        ->and($updateLog->user_id)->toBe($actor->id)
        ->and($updateLog->changes['brand']['from'])->toBe('Alpha Brick')
        ->and($updateLog->changes['brand']['to'])->toBe('Bravo Brick');

    $historyResponse = $this
        ->withHeaders(trustedHistoryHeaders($actor))
        ->getJson("/api/v1/materials/brick/{$materialId}/history");

    $historyResponse->assertOk()
        ->assertJsonPath('data.0.action', 'updated')
        ->assertJsonPath('data.0.actor.name', 'Supply Operator')
        ->assertJsonPath('data.1.action', 'created');

    $restoreResponse = $this
        ->withHeaders(trustedHistoryHeaders($actor))
        ->postJson("/api/v1/materials/brick/{$materialId}/history/{$createdLog->id}/restore");

    $restoreResponse->assertOk()
        ->assertJsonPath('message', 'Material history restored successfully')
        ->assertJsonPath('data.id', $materialId)
        ->assertJsonPath('data.brand', 'Alpha Brick')
        ->assertJsonPath('data.price_per_piece', 1200);

    $brick = Brick::withTrashed()->findOrFail($materialId);
    expect($brick->brand)->toBe('Alpha Brick')
        ->and((float) $brick->price_per_piece)->toBe(1200.0);

    $restoreLog = MaterialChangeLog::query()
        ->where('material_table', 'bricks')
        ->where('material_id', $materialId)
        ->where('action', 'restored')
        ->latest('id')
        ->first();

    expect($restoreLog)->not->toBeNull()
        ->and($restoreLog->user_id)->toBe($actor->id)
        ->and($restoreLog->changes['brand']['from'])->toBe('Bravo Brick')
        ->and($restoreLog->changes['brand']['to'])->toBe('Alpha Brick');
});

function trustedHistoryHeaders(User $actor): array
{
    return [
        'X-Service-Name' => 'supply-service-fe',
        'X-Service-Token' => 'supply-fe-test-token',
        'X-Actor-Id' => (string) $actor->id,
        'X-Actor-Name' => $actor->name,
        'X-Actor-Email' => $actor->email,
    ];
}
