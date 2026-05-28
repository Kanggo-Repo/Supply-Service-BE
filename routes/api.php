<?php

use App\Http\Controllers\Api\V1\DashboardSummaryApiController;
use App\Http\Controllers\Api\V1\MaterialCatalogApiController;
use App\Http\Controllers\Api\V1\MaterialHistoryApiController;
use App\Http\Controllers\Api\V1\MaterialRecycleBinApiController;
use App\Http\Controllers\Api\V1\MaterialSettingsApiController;
use App\Http\Controllers\Api\V1\StoreApiController;
use App\Http\Controllers\Api\V1\StoreLocationApiController;
use App\Http\Controllers\Api\V1\StoreSearchApiController;
use App\Http\Controllers\Api\V1\StoreSearchRadiusSettingsApiController;
use App\Http\Controllers\Api\V1\SupplyReferenceController;
use App\Http\Controllers\Api\V1\UnitApiController;
use Illuminate\Support\Facades\Route;

Route::middleware(['trusted.service', 'supply.actor'])->prefix('v1/reference')->group(function (): void {
    Route::get('/materials', [SupplyReferenceController::class, 'materials']);
    Route::post('/materials/by-ids', [SupplyReferenceController::class, 'materialsByIds']);
    Route::get('/materials/filter-metadata', [SupplyReferenceController::class, 'filterMetadata']);

    Route::get('/stores', [SupplyReferenceController::class, 'stores']);
    Route::get('/stores/{storeId}/locations', [SupplyReferenceController::class, 'storeLocations'])
        ->whereNumber('storeId');

    Route::get('/locations', [SupplyReferenceController::class, 'locations']);
    Route::post('/locations/availability/bulk', [SupplyReferenceController::class, 'bulkLocationAvailability']);
    Route::get('/locations/{locationId}/availability', [SupplyReferenceController::class, 'locationAvailability'])
        ->whereNumber('locationId');
    Route::get('/brick-installation-types', [SupplyReferenceController::class, 'brickInstallationTypes']);
    Route::get('/mortar-formulas', [SupplyReferenceController::class, 'mortarFormulas']);
});

Route::middleware(['trusted.service', 'supply.actor'])->prefix('v1')->group(function (): void {
    Route::get('/dashboard-summary', DashboardSummaryApiController::class);
    Route::get('/materials/summary', [MaterialCatalogApiController::class, 'summary']);
    Route::get('/materials/recycle-bin', [MaterialRecycleBinApiController::class, 'index']);
    Route::post('/materials/recycle-bin/{family}/{id}/restore', [MaterialRecycleBinApiController::class, 'restore'])
        ->whereNumber('id');
    Route::delete('/materials/recycle-bin/{family}/{id}', [MaterialRecycleBinApiController::class, 'forceDelete'])
        ->whereNumber('id');

    Route::get('/materials/{family}', [MaterialCatalogApiController::class, 'index']);
    Route::post('/materials/{family}', [MaterialCatalogApiController::class, 'store']);
    Route::get('/materials/{family}/{id}', [MaterialCatalogApiController::class, 'show'])
        ->whereNumber('id');
    Route::put('/materials/{family}/{id}', [MaterialCatalogApiController::class, 'update'])
        ->whereNumber('id');
    Route::delete('/materials/{family}/{id}', [MaterialCatalogApiController::class, 'destroy'])
        ->whereNumber('id');
    Route::get('/materials/{family}/{id}/history', [MaterialHistoryApiController::class, 'index'])
        ->whereNumber('id');
    Route::post('/materials/{family}/{id}/history/{logId}/restore', [MaterialHistoryApiController::class, 'restore'])
        ->whereNumber('id')
        ->whereNumber('logId');

    Route::get('/units/material-types', [UnitApiController::class, 'getMaterialTypes']);
    Route::get('/units/grouped', [UnitApiController::class, 'getGrouped']);
    Route::get('/units/{id}', [UnitApiController::class, 'show'])->whereNumber('id');
    Route::get('/units', [UnitApiController::class, 'index']);
    Route::post('/units', [UnitApiController::class, 'store']);
    Route::put('/units/{id}', [UnitApiController::class, 'update'])->whereNumber('id');
    Route::delete('/units/{id}', [UnitApiController::class, 'destroy'])->whereNumber('id');

    Route::get('/material-settings', [MaterialSettingsApiController::class, 'index']);
    Route::put('/material-settings', [MaterialSettingsApiController::class, 'update']);
    Route::get('/settings/store-search-radius', [StoreSearchRadiusSettingsApiController::class, 'index']);
    Route::put('/settings/store-search-radius', [StoreSearchRadiusSettingsApiController::class, 'update']);

    Route::get('/stores/{storeId}/locations/{locationId}/materials', [StoreLocationApiController::class, 'materials'])
        ->whereNumber('storeId')
        ->whereNumber('locationId');
    Route::get('/stores/{storeId}/locations/{locationId}', [StoreLocationApiController::class, 'show'])
        ->whereNumber('storeId')
        ->whereNumber('locationId');
    Route::put('/stores/{storeId}/locations/{locationId}', [StoreLocationApiController::class, 'update'])
        ->whereNumber('storeId')
        ->whereNumber('locationId');
    Route::delete('/stores/{storeId}/locations/{locationId}', [StoreLocationApiController::class, 'destroy'])
        ->whereNumber('storeId')
        ->whereNumber('locationId');
    Route::get('/stores/{storeId}/locations', [StoreLocationApiController::class, 'index'])->whereNumber('storeId');
    Route::post('/stores/{storeId}/locations', [StoreLocationApiController::class, 'store'])->whereNumber('storeId');

    Route::get('/stores/{id}', [StoreApiController::class, 'show'])->whereNumber('id');
    Route::put('/stores/{id}', [StoreApiController::class, 'update'])->whereNumber('id');
    Route::delete('/stores/{id}', [StoreApiController::class, 'destroy'])->whereNumber('id');
    Route::get('/stores/sidebar-summary', [StoreApiController::class, 'sidebarSummary']);
    Route::get('/stores', [StoreApiController::class, 'index']);
    Route::post('/stores', [StoreApiController::class, 'store']);

    Route::get('/store-search/search', [StoreSearchApiController::class, 'search']);
    Route::get('/store-search/locations-by-store', [StoreSearchApiController::class, 'locationsByStore']);
    Route::get('/store-search/all-stores', [StoreSearchApiController::class, 'allStores']);
    Route::get('/store-search/addresses-by-store', [StoreSearchApiController::class, 'addressesByStore']);
    Route::post('/store-search/quick-create', [StoreSearchApiController::class, 'quickCreate']);
});
