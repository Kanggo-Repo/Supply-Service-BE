<?php

namespace App\Http\Middleware;

use App\Support\Material\MaterialAuditContext;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class ResolveSupplyActorContext
{
    public function handle(Request $request, Closure $next): Response
    {
        $context = [
            'batch_id' => $request->header('X-Request-Id', (string) Str::uuid()),
            'user_id' => is_numeric($request->header('X-Actor-Id'))
                ? (int) $request->header('X-Actor-Id')
                : null,
        ];

        $request->attributes->set('supply_actor', [
            'id' => $context['user_id'],
            'name' => $request->header('X-Actor-Name'),
            'email' => $request->header('X-Actor-Email'),
        ]);

        return MaterialAuditContext::run($context, fn () => $next($request));
    }
}
