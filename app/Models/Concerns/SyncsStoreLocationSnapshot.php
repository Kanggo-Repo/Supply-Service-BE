<?php

namespace App\Models\Concerns;

use App\Models\Store;
use App\Models\StoreLocation;
use App\Models\StoreMaterialAvailability;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

trait SyncsStoreLocationSnapshot
{
    public static function bootSyncsStoreLocationSnapshot(): void
    {
        static::saving(function (Model $model): void {
            if (! Schema::hasTable('store_locations')) {
                return;
            }

            if ($model->isDirty('store_location_id')) {
                $location = static::findStoreLocationById($model->getAttribute('store_location_id'));

                if ($location) {
                    static::syncSnapshotFromLocation($model, $location);
                }

                return;
            }

            if (! $model->isDirty('store') && ! $model->isDirty('address')) {
                return;
            }

            $location = static::resolveStoreLocationFromSnapshot($model)
                ?? static::createStoreLocationFromSnapshot($model);

            if ($location) {
                $model->setAttribute('store_location_id', $location->id);
                static::syncSnapshotFromLocation($model, $location);
            }
        });

        static::saved(function (Model $model): void {
            if (! Schema::hasTable('store_material_availabilities')) {
                return;
            }

            static::syncAvailabilityLink($model);
        });

        static::deleted(function (Model $model): void {
            if (! Schema::hasTable('store_material_availabilities')) {
                return;
            }

            static::clearAvailabilityLinks($model);
        });

        static::restored(function (Model $model): void {
            if (! Schema::hasTable('store_material_availabilities')) {
                return;
            }

            static::syncAvailabilityLink($model);
        });
    }

    protected static function syncSnapshotFromLocation(Model $model, StoreLocation $location): void
    {
        if (in_array('store', $model->getFillable(), true)) {
            $model->setAttribute('store', $location->store?->name);
        }

        if (in_array('address', $model->getFillable(), true)) {
            $model->setAttribute('address', $location->material_snapshot_address);
        }
    }

    protected static function findStoreLocationById(mixed $storeLocationId): ?StoreLocation
    {
        if (! is_numeric($storeLocationId) || (int) $storeLocationId <= 0) {
            return null;
        }

        return StoreLocation::query()
            ->with('store')
            ->find((int) $storeLocationId);
    }

    protected static function resolveStoreLocationFromSnapshot(Model $model): ?StoreLocation
    {
        $storeName = static::normalizeText($model->getAttribute('store'));

        if ($storeName === '') {
            return null;
        }

        $locations = StoreLocation::query()
            ->with('store')
            ->whereHas('store', function ($query) use ($storeName): void {
                $query->whereRaw('LOWER(TRIM(name)) = ?', [$storeName]);
            })
            ->get();

        if ($locations->isEmpty()) {
            return null;
        }

        $address = static::normalizeText($model->getAttribute('address'));

        if ($address !== '') {
            $matched = $locations->first(function (StoreLocation $location) use ($address): bool {
                return in_array($address, array_filter([
                    static::normalizeText($location->address),
                    static::normalizeText($location->formatted_address),
                    static::normalizeText($location->full_address),
                    static::normalizeText($location->resolved_address),
                ]), true);
            });

            if ($matched) {
                return $matched;
            }
        }

        return $locations->count() === 1 ? $locations->first() : null;
    }

    protected static function createStoreLocationFromSnapshot(Model $model): ?StoreLocation
    {
        $rawStoreName = trim((string) $model->getAttribute('store'));

        if ($rawStoreName === '') {
            return null;
        }

        $store = Store::query()
            ->whereRaw('LOWER(TRIM(name)) = ?', [static::normalizeText($rawStoreName)])
            ->first();

        if (! $store) {
            $store = Store::query()->create([
                'name' => $rawStoreName,
            ]);
        }

        $rawAddress = trim((string) $model->getAttribute('address'));
        $normalizedAddress = static::normalizeText($rawAddress);
        $locations = $store->locations()->with('store')->get();

        if ($locations->isEmpty()) {
            return $store->locations()->create([
                'address' => $rawAddress !== '' ? $rawAddress : null,
            ]);
        }

        if ($normalizedAddress === '') {
            return $locations->count() === 1 ? $locations->first() : null;
        }

        $matched = $locations->first(function (StoreLocation $location) use ($normalizedAddress): bool {
            return in_array($normalizedAddress, array_filter([
                static::normalizeText($location->address),
                static::normalizeText($location->formatted_address),
                static::normalizeText($location->full_address),
                static::normalizeText($location->resolved_address),
            ]), true);
        });

        if ($matched) {
            return $matched;
        }

        return $store->locations()->create([
            'address' => $rawAddress,
        ]);
    }

    protected static function normalizeText(mixed $value): string
    {
        $text = strtolower(trim((string) $value));

        if ($text === '') {
            return '';
        }

        return trim((string) preg_replace('/\s+/', ' ', $text));
    }

    protected static function syncAvailabilityLink(Model $model): void
    {
        static::clearAvailabilityLinks($model);

        $storeLocationId = $model->getAttribute('store_location_id');

        if (! is_numeric($storeLocationId) || (int) $storeLocationId <= 0 || $model->trashed()) {
            return;
        }

        StoreMaterialAvailability::query()->create([
            'store_location_id' => (int) $storeLocationId,
            'materialable_type' => $model::class,
            'materialable_id' => (int) $model->getKey(),
        ]);
    }

    protected static function clearAvailabilityLinks(Model $model): void
    {
        StoreMaterialAvailability::query()
            ->where('materialable_type', $model::class)
            ->where('materialable_id', $model->getKey())
            ->delete();
    }
}
