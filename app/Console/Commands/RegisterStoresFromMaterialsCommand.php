<?php

namespace App\Console\Commands;

use App\Models\Store;
use App\Models\StoreLocation;
use App\Support\Supply\StoreSnapshotNormalizer;
use App\Support\Supply\SupplyMaterialRegistry;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RegisterStoresFromMaterialsCommand extends Command
{
    protected $signature = 'stores:register-from-materials {--dry-run : Show missing stores without creating them} {--json : Output JSON summary only}';

    protected $description = 'Register distinct store names from material tables into stores and create missing store locations from material snapshots.';

    public function handle(): int
    {
        $summary = $this->buildSummary();

        if ((bool) $this->option('json')) {
            $this->line(json_encode($summary, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

            return self::SUCCESS;
        }

        if ((bool) $this->option('dry-run')) {
            $this->warn('DRY RUN mode aktif. Tidak ada store atau store location yang dibuat.');
        }

        $rows = [];
        foreach ($summary['tables'] as $table => $count) {
            $rows[] = [$table, $count];
        }
        $this->table(['table', 'distinct_store_names'], $rows);
        $this->newLine();
        $this->line('Store ditemukan di material: '.count($summary['discovered_store_names']));
        $this->line('Store sudah terdaftar: '.count($summary['existing_store_names']));
        $this->line('Store belum terdaftar: '.count($summary['missing_store_names']));
        $this->line('Store location snapshot belum terdaftar: '.$summary['missing_store_location_count']);

        if ((bool) $this->option('dry-run')) {
            return self::SUCCESS;
        }

        $createdStores = 0;
        $createdLocations = 0;

        DB::transaction(function () use ($summary, &$createdStores, &$createdLocations): void {
            foreach ($summary['missing_store_names'] as $storeName) {
                Store::query()->create(['name' => $storeName]);
                $createdStores++;
            }

            foreach ($summary['missing_store_locations'] as $snapshot) {
                $store = Store::query()
                    ->whereRaw('LOWER(TRIM(name)) = ?', [StoreSnapshotNormalizer::normalizeText($snapshot['store_name'])])
                    ->first();

                if (! $store) {
                    $store = Store::query()->create(['name' => $snapshot['store_name']]);
                    $createdStores++;
                }

                $normalizedAddress = StoreSnapshotNormalizer::normalizeAddress($snapshot['address']);
                $exists = StoreLocation::query()
                    ->where('store_id', $store->id)
                    ->get()
                    ->contains(function (StoreLocation $location) use ($normalizedAddress): bool {
                        return StoreSnapshotNormalizer::normalizeAddress($location->resolved_address ?? $location->address) === $normalizedAddress;
                    });

                if ($exists) {
                    continue;
                }

                StoreLocation::query()->create([
                    'store_id' => $store->id,
                    'address' => $snapshot['address'],
                ]);
                $createdLocations++;
            }
        });

        $this->newLine();
        $this->info("Berhasil mendaftarkan {$createdStores} store baru.");
        $this->info("Berhasil mendaftarkan {$createdLocations} store location baru.");

        return self::SUCCESS;
    }

    /**
     * @return array<string, mixed>
     */
    public function buildSummary(): array
    {
        $discoveredStoresByKey = [];
        $discoveredLocationsByKey = [];
        $tableCounts = [];

        foreach (SupplyMaterialRegistry::models() as $family => $modelClass) {
            $model = new $modelClass();
            $table = $model->getTable();

            if (! Schema::hasTable($table) || ! Schema::hasColumn($table, 'store')) {
                continue;
            }

            $rows = DB::table($table)
                ->selectRaw('TRIM(store) as store_name')
                ->selectRaw(Schema::hasColumn($table, 'address') ? 'TRIM(address) as address' : "'' as address")
                ->whereNotNull('store')
                ->whereRaw("TRIM(store) <> ''")
                ->get();

            $tableStoreNames = [];

            foreach ($rows as $row) {
                $storeName = trim((string) ($row->store_name ?? ''));
                if ($storeName === '') {
                    continue;
                }

                $normalizedStoreName = StoreSnapshotNormalizer::normalizeText($storeName);
                $discoveredStoresByKey[$normalizedStoreName] ??= $storeName;
                $tableStoreNames[$normalizedStoreName] = $storeName;

                $address = trim((string) ($row->address ?? ''));
                $normalizedAddress = StoreSnapshotNormalizer::normalizeAddress($address);
                if ($normalizedAddress === '') {
                    continue;
                }

                $locationKey = $normalizedStoreName.'|'.$normalizedAddress;
                $discoveredLocationsByKey[$locationKey] ??= [
                    'store_name' => $storeName,
                    'address' => $address,
                ];
            }

            $tableCounts[$table] = count($tableStoreNames);
        }

        $existingStoresByKey = Store::query()
            ->select('name')
            ->whereNotNull('name')
            ->get()
            ->mapWithKeys(static function (Store $store): array {
                $name = trim((string) $store->name);

                return $name === '' ? [] : [StoreSnapshotNormalizer::normalizeText($name) => $name];
            })
            ->all();

        $existingLocationKeys = [];
        StoreLocation::query()
            ->with('store')
            ->get()
            ->each(function (StoreLocation $location) use (&$existingLocationKeys): void {
                $storeName = trim((string) ($location->store?->name ?? ''));
                $normalizedStoreName = StoreSnapshotNormalizer::normalizeText($storeName);
                $normalizedAddress = StoreSnapshotNormalizer::normalizeAddress($location->resolved_address ?? $location->address);

                if ($normalizedStoreName === '' || $normalizedAddress === '') {
                    return;
                }

                $existingLocationKeys[$normalizedStoreName.'|'.$normalizedAddress] = true;
            });

        $missingStoreNames = [];
        foreach ($discoveredStoresByKey as $normalized => $displayName) {
            if (! isset($existingStoresByKey[$normalized])) {
                $missingStoreNames[] = $displayName;
            }
        }

        $missingStoreLocations = [];
        foreach ($discoveredLocationsByKey as $locationKey => $snapshot) {
            if (! isset($existingLocationKeys[$locationKey])) {
                $missingStoreLocations[] = $snapshot;
            }
        }

        usort($missingStoreLocations, fn (array $left, array $right): int => [$left['store_name'], $left['address']] <=> [$right['store_name'], $right['address']]);
        sort($missingStoreNames);
        $discoveredStoreNames = array_values($discoveredStoresByKey);
        sort($discoveredStoreNames);
        $existingStoreNames = array_values($existingStoresByKey);
        sort($existingStoreNames);
        ksort($tableCounts);

        return [
            'tables' => $tableCounts,
            'discovered_store_names' => $discoveredStoreNames,
            'existing_store_names' => $existingStoreNames,
            'missing_store_names' => $missingStoreNames,
            'missing_store_locations' => $missingStoreLocations,
            'missing_store_location_count' => count($missingStoreLocations),
        ];
    }
}
