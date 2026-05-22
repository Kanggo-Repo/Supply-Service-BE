<?php

namespace App\Support\Supply;

class StoreSnapshotNormalizer
{
    public static function normalizeText(?string $value): string
    {
        $normalized = mb_strtolower(trim((string) $value));

        if ($normalized === '') {
            return '';
        }

        $normalized = preg_replace('/\s+/', ' ', $normalized) ?? $normalized;

        return trim($normalized, " \t\n\r\0\x0B,");
    }

    public static function normalizeAddress(?string $value): string
    {
        $normalized = self::normalizeText($value);

        if ($normalized === '') {
            return '';
        }

        $normalized = str_replace(['jalan ', 'jl. ', 'jl '], 'jl ', $normalized);
        $normalized = str_replace([', indonesia', ', banten', ', dki jakarta'], '', $normalized);

        return trim($normalized, " \t\n\r\0\x0B,");
    }
}
