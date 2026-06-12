<?php

use App\Helpers\NumberHelper;
use App\Models\Brick;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Round every stored brick package_volume to 11 decimals (11th rounded) and
     * recompute the derived price so the pricing invariant
     * price_per_piece = comparison_price_per_m3 * package_volume holds against the
     * rounded volume. The source-of-truth field depends on package_type, so only
     * the derived field is rewritten (see Brick::recomputePricing).
     *
     * Raw DB writes are used on purpose: going through Eloquent would fire the
     * material change-history observer for every row.
     */
    public function up(): void
    {
        DB::table('bricks')
            ->whereNotNull('package_volume')
            ->orderBy('id')
            ->chunkById(500, function ($rows): void {
                foreach ($rows as $row) {
                    $volume = NumberHelper::accurate($row->package_volume);
                    $attributes = ['package_volume' => $volume];

                    $attributes += Brick::recomputePricing(
                        $row->package_type,
                        $row->price_per_piece,
                        $row->comparison_price_per_m3,
                        $volume,
                    );

                    DB::table('bricks')->where('id', $row->id)->update($attributes);
                }
            });
    }

    /**
     * Irreversible: the original higher-precision volumes are not recoverable.
     */
    public function down(): void
    {
        //
    }
};
