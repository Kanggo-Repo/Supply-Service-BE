<?php

namespace App\Console\Commands;

use App\Models\StoreLocation;
use App\Models\StoreMaterialAvailability;
use App\Support\Supply\SupplyMaterialRegistry;
use Illuminate\Console\Command;

class BackfillStoreMaterialAvailabilityCommand extends Command
{
    protected $signature = 'stores:backfill-availability {--dry-run : Show what would be linked without saving}';

    protected $description = 'Backfill store material availabilities from existing material.store_location_id in a non-destructive way.';

    public function handle(): int
    {
        $dryRun = (bool) $this->option('dry-run');

        if ($dryRun) {
            $this->warn('DRY RUN mode aktif. Tidak ada data yang diubah.');
        }

        $totalChecked = 0;
        $totalLinked = 0;
        $totalMissingLocation = 0;

        foreach (SupplyMaterialRegistry::models() as $family => $modelClass) {
            $checked = 0;
            $linked = 0;
            $missingLocation = 0;

            $modelClass::query()
                ->whereNotNull('store_location_id')
                ->chunkById(500, function ($rows) use (&$checked, &$linked, &$missingLocation, $dryRun): void {
                    foreach ($rows as $material) {
                        $checked++;

                        $locationId = (int) ($material->store_location_id ?? 0);
                        if ($locationId <= 0) {
                            continue;
                        }

                        $locationExists = StoreLocation::query()->whereKey($locationId)->exists();
                        if (! $locationExists) {
                            $missingLocation++;

                            continue;
                        }

                        $alreadyLinked = StoreMaterialAvailability::query()
                            ->where('store_location_id', $locationId)
                            ->where('materialable_type', $material::class)
                            ->where('materialable_id', $material->getKey())
                            ->exists();

                        if ($alreadyLinked) {
                            continue;
                        }

                        if (! $dryRun) {
                            StoreMaterialAvailability::query()->create([
                                'store_location_id' => $locationId,
                                'materialable_type' => $material::class,
                                'materialable_id' => (int) $material->getKey(),
                            ]);
                        }

                        $linked++;
                    }
                });

            $this->line(sprintf(
                '%s => checked: %d, linked: %d, missing_location: %d',
                $family,
                $checked,
                $linked,
                $missingLocation,
            ));

            $totalChecked += $checked;
            $totalLinked += $linked;
            $totalMissingLocation += $missingLocation;
        }

        $this->newLine();
        $this->info(sprintf(
            'Summary: checked=%d, linked=%d, missing_location=%d',
            $totalChecked,
            $totalLinked,
            $totalMissingLocation,
        ));

        return self::SUCCESS;
    }
}
