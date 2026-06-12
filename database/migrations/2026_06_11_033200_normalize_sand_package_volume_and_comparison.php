<?php

use App\Helpers\NumberHelper;
use App\Models\Sand;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Round every stored sand package_volume to 11 decimals (11th rounded) and
     * recompute comparison_price_per_m3 = package_price / package_volume, so the
     * legacy mixed-precision data matches what the catalog now enforces on save.
     *
     * Raw DB writes are used on purpose: going through Eloquent would fire the
     * material change-history observer for every row.
     */
    public function up(): void
    {
        DB::table('sands')
            ->whereNotNull('package_volume')
            ->orderBy('id')
            ->chunkById(500, function ($rows): void {
                foreach ($rows as $row) {
                    $volume = NumberHelper::accurate($row->package_volume);
                    $attributes = ['package_volume' => $volume];

                    $comparison = Sand::recomputeComparison($row->package_price, $volume);
                    if ($comparison !== null) {
                        $attributes['comparison_price_per_m3'] = $comparison;
                    }

                    DB::table('sands')->where('id', $row->id)->update($attributes);
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
