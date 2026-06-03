<?php

namespace App\Console\Commands;

use App\Models\StoreLocation;
use App\Support\Supply\SupplyMaterialRegistry;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;

class ResyncStoreLocationMaterialAddressesCommand extends Command
{
    protected $signature = 'stores:resync-material-addresses
        {--dry-run : Show what would be updated without saving}
        {--material= : Limit to one material type}
        {--store-location-id= : Limit sync to one store location id}';

    protected $description = 'Resync material store/address snapshots from linked store locations.';

    public function handle(): int
    {
        $dryRun = (bool) $this->option('dry-run');
        $materialFilter = trim((string) $this->option('material'));
        $storeLocationId = (int) $this->option('store-location-id');

        if ($dryRun) {
            $this->warn('DRY RUN mode aktif. Tidak ada material yang diubah.');
        }

        $models = SupplyMaterialRegistry::models();
        if ($materialFilter !== '') {
            $family = SupplyMaterialRegistry::normalizeFamily($materialFilter);

            if (! $family || ! isset($models[$family])) {
                $this->error('Material tidak dikenali. Gunakan salah satu: '.implode(', ', array_keys($models)));

                return self::FAILURE;
            }

            $models = [$family => $models[$family]];
        }

        $summaryRows = [];
        $totals = ['checked' => 0, 'updated' => 0, 'unchanged' => 0, 'missing_location' => 0];

        foreach ($models as $label => $modelClass) {
            $stats = $this->resyncForModel($modelClass, $dryRun, $storeLocationId);
            $summaryRows[] = [$label, $stats['checked'], $stats['updated'], $stats['unchanged'], $stats['missing_location']];

            foreach ($totals as $key => $value) {
                $totals[$key] += $stats[$key] ?? 0;
            }
        }

        $this->table(['material', 'checked', 'updated', 'unchanged', 'missing_location'], $summaryRows);
        $this->newLine();
        $this->info(sprintf(
            'Summary: checked=%d, updated=%d, unchanged=%d, missing_location=%d',
            $totals['checked'],
            $totals['updated'],
            $totals['unchanged'],
            $totals['missing_location'],
        ));

        return self::SUCCESS;
    }

    /**
     * @param  class-string<Model>  $modelClass
     * @return array<string,int>
     */
    private function resyncForModel(string $modelClass, bool $dryRun, int $storeLocationId): array
    {
        $stats = ['checked' => 0, 'updated' => 0, 'unchanged' => 0, 'missing_location' => 0];

        $query = $modelClass::query()->whereNotNull('store_location_id');

        if ($storeLocationId > 0) {
            $query->where('store_location_id', $storeLocationId);
        }

        $query->chunkById(200, function ($materials) use (&$stats, $dryRun): void {
            foreach ($materials as $material) {
                $stats['checked']++;

                $location = StoreLocation::query()->with('store')->find((int) ($material->store_location_id ?? 0));
                if (! $location) {
                    $stats['missing_location']++;

                    continue;
                }

                $nextStore = trim((string) ($location->store?->name ?? ''));
                $nextAddress = trim((string) ($location->material_snapshot_address ?? ''));
                $changed = false;

                if (in_array('store', $material->getFillable(), true) && (string) ($material->store ?? '') !== $nextStore) {
                    $material->store = $nextStore !== '' ? $nextStore : null;
                    $changed = true;
                }

                if (in_array('address', $material->getFillable(), true) && (string) ($material->address ?? '') !== $nextAddress) {
                    $material->address = $nextAddress !== '' ? $nextAddress : null;
                    $changed = true;
                }

                if (! $changed) {
                    $stats['unchanged']++;

                    continue;
                }

                if (! $dryRun) {
                    $material->save();
                }

                $stats['updated']++;
            }
        });

        return $stats;
    }
}
