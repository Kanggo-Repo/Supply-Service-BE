<?php

namespace App\Models;

use App\Helpers\NumberHelper;

class Sand extends SupplyMaterial
{
    /**
     * Stored decimals for comparison_price_per_m3 (column is decimal(15, 2)).
     */
    public const COMPARISON_DECIMALS = 2;

    protected $table = 'sands';

    protected static function booted(): void
    {
        static::saving(function (self $sand): void {
            if ($sand->package_volume !== null) {
                $sand->package_volume = NumberHelper::accurate($sand->package_volume);
            }

            $comparison = self::recomputeComparison($sand->package_price, $sand->package_volume);
            if ($comparison !== null) {
                $sand->comparison_price_per_m3 = $comparison;
            }
        });
    }

    /**
     * Comparison price per m3 is, by definition, package price divided by
     * package volume. Returns null when it cannot be derived (no price or
     * non-positive volume) so callers leave the existing value untouched.
     */
    public static function recomputeComparison(mixed $price, mixed $volume): ?float
    {
        $price = $price === null ? null : (float) $price;
        $volume = $volume === null ? null : (float) $volume;

        if ($price === null || $volume === null || $volume <= 0.0) {
            return null;
        }

        return NumberHelper::accurate($price / $volume, self::COMPARISON_DECIMALS);
    }
}
