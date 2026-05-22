<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTrustedServiceCaller
{
    public function handle(Request $request, Closure $next): Response
    {
        $serviceName = trim((string) $request->header('X-Service-Name', ''));
        $serviceToken = trim((string) $request->header('X-Service-Token', ''));
        $trustedCallers = config('supply_security.trusted_callers', []);

        if (
            $serviceName === ''
            || $serviceToken === ''
            || ! is_array($trustedCallers)
            || ! array_key_exists($serviceName, $trustedCallers)
            || ! is_string($trustedCallers[$serviceName])
            || ! hash_equals($trustedCallers[$serviceName], $serviceToken)
        ) {
            return new JsonResponse([
                'message' => 'Unauthenticated service caller.',
            ], 401);
        }

        $request->attributes->set('trusted_service_name', $serviceName);

        return $next($request);
    }
}
