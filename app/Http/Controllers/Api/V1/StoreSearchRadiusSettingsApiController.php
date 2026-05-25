<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\AppSetting;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StoreSearchRadiusSettingsApiController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'data' => [
                'project_store_radius_default_km' => AppSetting::getFloat('project_store_radius_default_km', 10.0),
                'project_store_radius_final_km' => AppSetting::getFloat('project_store_radius_final_km', 15.0),
            ],
        ]);
    }

    public function update(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'project_store_radius_default_km' => ['required', 'numeric', 'min:0.1', 'max:1000'],
            'project_store_radius_final_km' => ['required', 'numeric', 'min:0.1', 'max:1000', 'gte:project_store_radius_default_km'],
        ]);

        $defaultKm = (float) $validated['project_store_radius_default_km'];
        $finalKm = max((float) $validated['project_store_radius_final_km'], $defaultKm);

        AppSetting::putValue('project_store_radius_default_km', $defaultKm);
        AppSetting::putValue('project_store_radius_final_km', $finalKm);

        return response()->json([
            'message' => 'Store search radius updated successfully',
            'data' => [
                'project_store_radius_default_km' => $defaultKm,
                'project_store_radius_final_km' => $finalKm,
            ],
        ]);
    }
}
