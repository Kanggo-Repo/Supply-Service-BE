<?php

namespace App\Support\Material;

use Closure;
use Illuminate\Support\Str;

class MaterialAuditContext
{
    /**
     * @var array<int, array<string, mixed>>
     */
    protected static array $stack = [];

    /**
     * @param  array<string, mixed>  $context
     */
    public static function run(array $context, Closure $callback): mixed
    {
        $parent = self::current() ?? [];
        $merged = array_merge($parent, $context);

        if (! isset($merged['batch_id']) || ! is_string($merged['batch_id']) || $merged['batch_id'] === '') {
            $merged['batch_id'] = (string) Str::uuid();
        }

        self::$stack[] = $merged;

        try {
            return $callback();
        } finally {
            array_pop(self::$stack);
        }
    }

    /**
     * @return array<string, mixed>|null
     */
    public static function current(): ?array
    {
        if (self::$stack === []) {
            return null;
        }

        return self::$stack[array_key_last(self::$stack)];
    }

    public static function batchId(): ?string
    {
        $batchId = self::current()['batch_id'] ?? null;

        return is_string($batchId) && $batchId !== '' ? $batchId : null;
    }

    public static function userId(): ?int
    {
        $userId = self::current()['user_id'] ?? null;

        return is_numeric($userId) ? (int) $userId : null;
    }

    public static function action(): ?string
    {
        $action = self::current()['action'] ?? null;

        return is_string($action) && $action !== '' ? $action : null;
    }
}
