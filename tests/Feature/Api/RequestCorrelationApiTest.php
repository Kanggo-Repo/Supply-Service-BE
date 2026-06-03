<?php

test('health endpoint returns service status summary', function (): void {
    $response = $this->getJson('/api/v1/health');

    $response->assertOk()
        ->assertHeader('X-Request-Id')
        ->assertJson([
            'status' => 'ok',
            'healthy' => true,
            'service' => config('app.name'),
        ])
        ->assertJsonStructure([
            'status',
            'healthy',
            'service',
            'finished_at',
            'checks' => [
                ['name', 'label', 'status', 'summary'],
            ],
        ]);

    expect($response->headers->get('X-Request-Id'))->not->toBe('');
});

test('health endpoint preserves inbound request id header', function (): void {
    $this->withHeader('X-Request-Id', 'supply-phase-5-request')
        ->getJson('/api/v1/health')
        ->assertOk()
        ->assertHeader('X-Request-Id', 'supply-phase-5-request');
});
