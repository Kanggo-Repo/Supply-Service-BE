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

test('recycle bin endpoints list restore and permanently delete soft deleted materials', function (): void {
    $actor = User::factory()->create([
        'name' => 'Recycle Operator',
        'email' => 'recycle@example.test',
    ]);

    $brick = Brick::factory()->create([
        'brand' => 'Brick Recycle',
        'price_per_piece' => 1400,
    ]);

    $deleteResponse = $this
        ->withHeaders(trustedRecycleHeaders($actor))
        ->deleteJson("/api/v1/materials/brick/{$brick->id}");

    $deleteResponse->assertOk()
        ->assertJsonPath('message', 'Material deleted successfully');

    $this->assertSoftDeleted('bricks', [
        'id' => $brick->id,
        'deleted_by' => $actor->id,
    ]);

    $deletedLog = MaterialChangeLog::query()
        ->where('material_table', 'bricks')
        ->where('material_id', $brick->id)
        ->where('action', 'deleted')
        ->latest('id')
        ->first();

    expect($deletedLog)->not->toBeNull()
        ->and($deletedLog->user_id)->toBe($actor->id);

    $indexResponse = $this
        ->withHeaders(trustedRecycleHeaders($actor))
        ->getJson('/api/v1/materials/recycle-bin');

    $indexResponse->assertOk()
        ->assertJsonPath('data.summary.brick', 1)
        ->assertJsonPath('data.items.0.id', $brick->id)
        ->assertJsonPath('data.items.0.family', 'brick')
        ->assertJsonPath('data.items.0.deleted_by.id', $actor->id)
        ->assertJsonPath('data.items.0.deleted_by.name', 'Recycle Operator');

    $restoreResponse = $this
        ->withHeaders(trustedRecycleHeaders($actor))
        ->postJson("/api/v1/materials/recycle-bin/brick/{$brick->id}/restore");

    $restoreResponse->assertOk()
        ->assertJsonPath('message', 'Material restored successfully')
        ->assertJsonPath('data.id', $brick->id);

    $this->assertNotSoftDeleted('bricks', [
        'id' => $brick->id,
    ]);

    $restoreLog = MaterialChangeLog::query()
        ->where('material_table', 'bricks')
        ->where('material_id', $brick->id)
        ->where('action', 'restored')
        ->latest('id')
        ->first();

    expect($restoreLog)->not->toBeNull()
        ->and($restoreLog->user_id)->toBe($actor->id);

    $brick->delete();

    $forceDeleteResponse = $this
        ->withHeaders(trustedRecycleHeaders($actor))
        ->deleteJson("/api/v1/materials/recycle-bin/brick/{$brick->id}");

    $forceDeleteResponse->assertOk()
        ->assertJsonPath('message', 'Material permanently deleted');

    $this->assertDatabaseMissing('bricks', [
        'id' => $brick->id,
    ]);
});

function trustedRecycleHeaders(User $actor): array
{
    return [
        'X-Service-Name' => 'supply-service-fe',
        'X-Service-Token' => 'supply-fe-test-token',
        'X-Actor-Id' => (string) $actor->id,
        'X-Actor-Name' => $actor->name,
        'X-Actor-Email' => $actor->email,
    ];
}
