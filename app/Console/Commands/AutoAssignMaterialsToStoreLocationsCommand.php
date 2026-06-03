<?php

namespace App\Console\Commands;

use App\Models\Store;
use App\Models\StoreLocation;
use App\Support\Supply\StoreSnapshotNormalizer;
use App\Support\Supply\SupplyMaterialRegistry;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class AutoAssignMaterialsToStoreLocationsCommand extends Command
{
    protected $signature = 'stores:auto-assign-materials
        {--dry-run : Show what would be linked without saving}
        {--force : Re-evaluate materials even when store_location_id is already filled}
        {--material= : Limit to one material type}';

    protected $description = 'Auto-assign materials to stores and store locations using exact store name and safe location matching.';

    public function handle(): int
    {
        $dryRun = (bool) $this->option('dry-run');
        $force = (bool) $this->option('force');
        $materialFilter = trim((string) $this->option('material'));

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
        $totals = ['checked' => 0, 'assigned' => 0, 'missing_store' => 0, 'missing_location' => 0, 'ambiguous_location' => 0, 'skipped_existing' => 0];

        foreach ($models as $label => $modelClass) {
            $result = $this->assignForModel($modelClass, $dryRun, $force);
            $summaryRows[] = [$label, $result['checked'], $result['assigned'], $result['missing_store'], $result['missing_location'], $result['ambiguous_location'], $result['skipped_existing']];

            foreach ($totals as $key => $value) {
                $totals[$key] += $result[$key] ?? 0;
            }
        }

        $this->table(['material', 'checked', 'assigned', 'missing_store', 'missing_location', 'ambiguous_location', 'skipped_existing'], $summaryRows);
        $this->newLine();
        $this->info(sprintf(
            'Summary: checked=%d, assigned=%d, missing_store=%d, missing_location=%d, ambiguous_location=%d, skipped_existing=%d',
            $totals['checked'],
            $totals['assigned'],
            $totals['missing_store'],
            $totals['missing_location'],
            $totals['ambiguous_location'],
            $totals['skipped_existing'],
        ));

        return self::SUCCESS;
    }

    /**
     * @param  class-string<Model>  $modelClass
     * @return array<string,int>
     */
    private function assignForModel(string $modelClass, bool $dryRun, bool $force): array
    {
        $stats = ['checked' => 0, 'assigned' => 0, 'missing_store' => 0, 'missing_location' => 0, 'ambiguous_location' => 0, 'skipped_existing' => 0];

        $query = $modelClass::query()
            ->whereNotNull('store')
            ->where('store', '!=', '');

        if (! $force) {
            $query->whereNull('store_location_id');
        }

        $query->chunkById(200, function ($materials) use (&$stats, $dryRun, $force): void {
            foreach ($materials as $material) {
                $stats['checked']++;

                $storeName = trim((string) ($material->store ?? ''));
                if ($storeName === '') {
                    $stats['missing_store']++;

                    continue;
                }

                $store = Store::query()
                    ->whereRaw('LOWER(TRIM(name)) = ?', [StoreSnapshotNormalizer::normalizeText($storeName)])
                    ->first();

                if (! $store) {
                    $stats['missing_store']++;

                    continue;
                }

                if (! $force && (int) ($material->store_location_id ?? 0) > 0) {
                    $stats['skipped_existing']++;

                    continue;
                }

                $matchedLocation = $this->resolveTargetLocationForMaterial($store, $material);
                if ($matchedLocation === null) {
                    $locationCount = (int) $store->locations()->count();
                    if ($locationCount <= 0) {
                        $stats['missing_location']++;
                    } else {
                        $stats['ambiguous_location']++;
                    }

                    continue;
                }

                if (! $dryRun) {
                    $material->store_location_id = $matchedLocation->id;
                    $material->save();
                }

                $stats['assigned']++;
            }
        });

        return $stats;
    }

    private function resolveTargetLocationForMaterial(Store $store, Model $material): ?StoreLocation
    {
        /** @var Collection<int, StoreLocation> $locations */
        $locations = $store->locations()->get();

        if ($locations->isEmpty()) {
            return null;
        }

        if ($locations->count() === 1) {
            return $locations->first();
        }

        $materialAddress = StoreSnapshotNormalizer::normalizeAddress((string) ($material->address ?? ''));
        if ($materialAddress === '') {
            return null;
        }

        $matches = $locations->filter(function (StoreLocation $location) use ($materialAddress): bool {
            $candidates = array_filter([
                StoreSnapshotNormalizer::normalizeAddress($location->formatted_address),
                StoreSnapshotNormalizer::normalizeAddress($location->address),
                StoreSnapshotNormalizer::normalizeAddress($location->resolved_address),
                StoreSnapshotNormalizer::normalizeAddress($location->full_address),
            ]);

            return in_array($materialAddress, $candidates, true);
        })->values();

        return $matches->count() === 1 ? $matches->first() : null;
    }
}
