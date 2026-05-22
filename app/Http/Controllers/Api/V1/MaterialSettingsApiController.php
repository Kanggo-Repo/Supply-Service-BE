<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\MaterialSetting;
use App\Support\Supply\SupplyMaterialRegistry;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class MaterialSettingsApiController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'data' => $this->serializeSettings($this->resolveSettings()),
        ]);
    }

    public function update(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'items' => ['required', 'array', 'min:1'],
            'items.*.material_type' => ['required', 'string'],
            'items.*.is_visible' => ['required', 'boolean'],
            'items.*.display_order' => ['required', 'integer', 'min:0'],
        ]);

        foreach ($validated['items'] as $item) {
            $materialType = SupplyMaterialRegistry::normalizeFamily($item['material_type']) ?? $item['material_type'];

            if (! in_array($materialType, SupplyMaterialRegistry::families(), true)) {
                continue;
            }

            MaterialSetting::query()->updateOrCreate(
                ['material_type' => $materialType],
                [
                    'is_visible' => $item['is_visible'],
                    'display_order' => $item['display_order'],
                ],
            );
        }

        return response()->json([
            'message' => 'Material settings updated successfully',
            'data' => $this->serializeSettings($this->resolveSettings()),
        ]);
    }

    /**
     * @return Collection<int, MaterialSetting>
     */
    private function resolveSettings(): Collection
    {
        return MaterialSetting::query()
            ->orderBy('display_order')
            ->orderBy('material_type')
            ->get();
    }

    /**
     * @param  Collection<int, MaterialSetting>  $settings
     * @return list<array<string, mixed>>
     */
    private function serializeSettings(Collection $settings): array
    {
        return $settings
            ->map(fn (MaterialSetting $setting): array => [
                'id' => $setting->id,
                'material_type' => $setting->material_type,
                'label' => MaterialSetting::getMaterialLabel($setting->material_type),
                'is_visible' => $setting->is_visible,
                'display_order' => $setting->display_order,
            ])
            ->values()
            ->all();
    }
}
