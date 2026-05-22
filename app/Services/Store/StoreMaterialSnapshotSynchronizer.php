<?php

namespace App\Services\Store;

use App\Models\Store;
use App\Models\StoreLocation;
use App\Support\Supply\SupplyMaterialRegistry;
use Illuminate\Database\Eloquent\Model;

class StoreMaterialSnapshotSynchronizer
{
    public function syncStore(Store $store): void
    {
        $store->loadMissing('locations.store');

        foreach ($store->locations as $location) {
            $this->syncLocation($location);
        }
    }

    public function syncLocation(StoreLocation $location): void
    {
        $location->loadMissing('store');

        foreach (SupplyMaterialRegistry::models() as $modelClass) {
            $modelClass::query()
                ->where('store_location_id', $location->id)
                ->get()
                ->each(function (Model $material) use ($location): void {
                    $material->forceFill([
                        'store' => $location->store?->name,
                        'address' => $location->material_snapshot_address,
                    ]);

                    if ($material->isDirty()) {
                        $material->save();
                    }
                });
        }
    }

    public function detachLocation(StoreLocation $location): void
    {
        foreach (SupplyMaterialRegistry::models() as $modelClass) {
            $modelClass::query()
                ->where('store_location_id', $location->id)
                ->get()
                ->each(function (Model $material): void {
                    $material->forceFill([
                        'store_location_id' => null,
                    ]);

                    if ($material->isDirty()) {
                        $material->save();
                    }
                });
        }
    }
}
