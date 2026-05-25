<?php

namespace App\Console\Commands;

use App\Models\Cement;
use App\Models\Nat;
use App\Models\StoreMaterialAvailability;
use App\Support\Supply\SupplyMaterialRegistry;
use Illuminate\Console\Command;

class RepairStoreMaterialAvailabilityCommand extends Command
{
    protected $signature = 'stores:repair-availability {--dry-run : Show what would be repaired without saving}';

    protected $description = 'Normalize legacy store material availability rows and prune orphan links.';

    public function handle(): int
    {
        $dryRun = (bool) $this->option('dry-run');

        if ($dryRun) {
            $this->warn('DRY RUN mode aktif. Tidak ada data yang diubah.');
        }

        [$normalizedNat, $deduplicatedNat, $deletedNat] = $this->repairLegacyNatLinks($dryRun);
        $deletedOrphans = $this->pruneOrphanLinks($dryRun);

        $this->newLine();
        $this->info(sprintf(
            'Summary: normalized_nat=%d, deduplicated_nat=%d, deleted_nat=%d, deleted_orphans=%d',
            $normalizedNat,
            $deduplicatedNat,
            $deletedNat,
            $deletedOrphans,
        ));

        return self::SUCCESS;
    }

    /**
     * @return array{int, int, int}
     */
    private function repairLegacyNatLinks(bool $dryRun): array
    {
        $normalized = 0;
        $deduplicated = 0;
        $deleted = 0;

        StoreMaterialAvailability::query()
            ->where('materialable_type', Nat::class)
            ->orderBy('id')
            ->get()
            ->each(function (StoreMaterialAvailability $availability) use (&$normalized, &$deduplicated, &$deleted, $dryRun): void {
                $cement = Cement::query()->find($availability->materialable_id);

                if ($cement && (int) $cement->store_location_id === (int) $availability->store_location_id) {
                    $hasCorrectCementLink = StoreMaterialAvailability::query()
                        ->where('store_location_id', $availability->store_location_id)
                        ->where('materialable_type', Cement::class)
                        ->where('materialable_id', $availability->materialable_id)
                        ->exists();

                    if ($hasCorrectCementLink) {
                        if (! $dryRun) {
                            $availability->delete();
                        }

                        $deduplicated++;

                        return;
                    }

                    if (! $dryRun) {
                        $availability->forceFill([
                            'materialable_type' => Cement::class,
                        ])->save();
                    }

                    $normalized++;

                    return;
                }

                if (! $dryRun) {
                    $availability->delete();
                }

                $deleted++;
            });

        $this->line(sprintf(
            'legacy_nat => normalized: %d, deduplicated: %d, deleted: %d',
            $normalized,
            $deduplicated,
            $deleted,
        ));

        return [$normalized, $deduplicated, $deleted];
    }

    private function pruneOrphanLinks(bool $dryRun): int
    {
        $materialModels = array_values(SupplyMaterialRegistry::models());

        $orphanIds = StoreMaterialAvailability::query()
            ->whereDoesntHaveMorph('materialable', $materialModels)
            ->pluck('id');

        $count = $orphanIds->count();

        if ($count > 0 && ! $dryRun) {
            StoreMaterialAvailability::query()
                ->whereIn('id', $orphanIds)
                ->delete();
        }

        $this->line(sprintf('orphans => deleted: %d', $count));

        return $count;
    }
}
