<?php

namespace App\Support\Observability;

use Sentry\Event;
use Sentry\EventHint;

final class SentryEventContext
{
    public static function beforeSend(Event $event, ?EventHint $hint = null): ?Event
    {
        if (! app()->bound('request')) {
            return $event;
        }

        $request = request();

        $event->setTag('service', (string) config('app.name'));
        $event->setTag('environment', app()->environment());

        $route = $request->route();
        if ($route !== null) {
            $routeName = $route->getName();
            if (is_string($routeName) && $routeName !== '') {
                $event->setTag('route_name', $routeName);
            }

            $event->setTag('route_uri', $route->uri());
        }

        $requestId = trim((string) $request->header('X-Request-Id', ''));
        if ($requestId !== '') {
            $event->setExtra('request_id', $requestId);
        }

        $upstreamService = trim((string) $request->header('X-Service-Name', ''));
        if ($upstreamService !== '') {
            $event->setExtra('upstream_service', $upstreamService);
        }

        $actor = $request->attributes->get('supply_actor');
        if (is_array($actor) && isset($actor['id']) && $actor['id'] !== null) {
            $event->setUser(array_filter([
                'id' => (string) $actor['id'],
                'username' => $actor['name'] ?? null,
            ], static fn (mixed $value): bool => $value !== null && $value !== ''));

            $event->setExtra('actor_id', $actor['id']);
        }

        return $event;
    }
}
