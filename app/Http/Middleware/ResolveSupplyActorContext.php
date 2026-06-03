<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Support\Material\MaterialAuditContext;
use App\Support\Observability\RequestCorrelation;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class ResolveSupplyActorContext
{
    public function handle(Request $request, Closure $next): Response
    {
        $actorId = is_numeric($request->header('X-Actor-Id'))
            ? (int) $request->header('X-Actor-Id')
            : null;
        $actorName = trim((string) $request->header('X-Actor-Name', ''));
        $actorEmail = trim((string) $request->header('X-Actor-Email', ''));

        if ($actorId !== null) {
            $this->syncShadowUser($actorId, $actorName, $actorEmail);
        }

        $context = [
            'batch_id' => RequestCorrelation::resolveRequestId($request),
            'user_id' => $actorId,
        ];

        $request->attributes->set('supply_actor', [
            'id' => $context['user_id'],
            'name' => $actorName !== '' ? $actorName : null,
            'email' => $actorEmail !== '' ? $actorEmail : null,
        ]);

        return MaterialAuditContext::run($context, fn () => $next($request));
    }

    private function syncShadowUser(int $actorId, string $actorName, string $actorEmail): void
    {
        $user = User::query()->find($actorId);

        if (! $user && $actorEmail !== '') {
            $user = User::query()->where('email', $actorEmail)->first();
        }

        if (! $user) {
            $user = new User;
            $user->id = $actorId;
            $user->password = Hash::make(Str::random(40));
        }

        if ($actorName !== '') {
            $user->name = $actorName;
        } elseif (! $user->exists && $user->name === null) {
            $user->name = 'Supply Actor '.$actorId;
        }

        if ($actorEmail !== '') {
            $emailOwnedByOtherUser = User::query()
                ->where('email', $actorEmail)
                ->whereKeyNot($user->getKey())
                ->exists();

            $user->email = $emailOwnedByOtherUser
                ? "shadow-actor-{$actorId}@local.invalid"
                : $actorEmail;
        } elseif (! $user->exists && $user->email === null) {
            $user->email = "shadow-actor-{$actorId}@local.invalid";
        }

        $user->save();
    }
}
