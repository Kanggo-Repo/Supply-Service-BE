<?php

namespace App\Models;

use App\Helpers\NumberHelper;
use Database\Factories\BrickFactory;

class Brick extends SupplyMaterial
{
    /**
     * Stored decimals for both price columns (decimal(15, 2)).
     */
    public const PRICE_DECIMALS = 2;

    protected static function booted(): void
    {
        static::saving(function (self $brick): void {
            if ($brick->package_volume !== null) {
                $brick->package_volume = NumberHelper::accurate($brick->package_volume);
            }

            foreach (self::recomputePricing(
                $brick->package_type,
                $brick->price_per_piece,
                $brick->comparison_price_per_m3,
                $brick->package_volume === null ? null : (float) $brick->package_volume,
            ) as $field => $value) {
                $brick->{$field} = $value;
            }
        });
    }

    public static function isKubikPackage(mixed $packageType): bool
    {
        return strtolower(trim((string) $packageType)) === 'kubik';
    }

    /**
     * Keep the pricing invariant price_per_piece = comparison_price_per_m3 * package_volume.
     * The source-of-truth field depends on the package mode, so only the derived
     * field is recomputed:
     *  - kubik  -> comparison (per m3) is entered, price_per_piece is derived.
     *  - eceran -> price_per_piece is entered, comparison (per m3) is derived.
     *
     * @return array{price_per_piece?: float, comparison_price_per_m3?: float}
     */
    public static function recomputePricing(mixed $packageType, mixed $pricePerPiece, mixed $comparison, ?float $volume): array
    {
        if ($volume === null || $volume <= 0.0) {
            return [];
        }

        if (self::isKubikPackage($packageType)) {
            if ($comparison === null) {
                return [];
            }

            return ['price_per_piece' => NumberHelper::accurate((float) $comparison * $volume, self::PRICE_DECIMALS)];
        }

        if ($pricePerPiece === null) {
            return [];
        }

        return ['comparison_price_per_m3' => NumberHelper::accurate((float) $pricePerPiece / $volume, self::PRICE_DECIMALS)];
    }

    protected static function newFactory(): BrickFactory
    {
        return BrickFactory::new();
    }
}
