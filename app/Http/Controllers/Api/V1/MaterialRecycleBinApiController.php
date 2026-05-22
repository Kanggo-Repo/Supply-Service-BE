<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\MaterialChangeLog;
use App\Support\Supply\SupplyMaterialLabelResolver;
use App\Support\Supply\SupplyMaterialRegistry;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;

class MaterialRecycleBinApiController extends Controller
{
    public function index(): JsonResponse
    {
        $items = collect();
        $summary = [];

        foreach (SupplyMaterialRegistry::models() as $family => $modelClass) {
            $deleted = $modelClass::onlyTrashed()
                ->with('deletedBy')
                ->orderByDesc('deleted_at')
                ->get();

            if ($deleted->isEmpty()) {
                continue;
            }

            $summary[$family] = $deleted->count();

            $items = $items->concat($deleted->map(fn (Model $material): array => [
                'id' => $material->getKey(),
                'family' => $family,
                'label' => SupplyMaterialLabelResolver::resolve($material),
                'deleted_at' => $material->deleted_at?->toIso8601String(),
                'deleted_by' => [
                    'id' => $material->deleted_by,
                    'name' => $material->deletedBy?->name,
                    'email' => $material->deletedBy?->email,
                ],
            ]));
        }

        return response()->json([
            'data' => [
                'summary' => $summary,
                'items' => $items
                    ->sortByDesc('deleted_at')
                    ->values()
                    ->all(),
            ],
        ]);
    }

    public function restore(string $family, int $id): JsonResponse
    {
        $material = $this->resolveDeletedMaterial($family, $id);

        if (! $material) {
            return response()->json(['message' => 'Deleted material not found.'], 404);
        }

        $material->restore();

        return response()->json([
            'message' => 'Material restored successfully',
            'data' => $this->serializeMaterial(SupplyMaterialRegistry::normalizeFamily($family), $material->fresh()),
        ]);
    }

    public function forceDelete(string $family, int $id): JsonResponse
    {
        $material = $this->resolveDeletedMaterial($family, $id);

        if (! $material) {
            return response()->json(['message' => 'Deleted material not found.'], 404);
        }

        $material->forceDelete();

        return response()->json([
            'message' => 'Material permanently deleted',
        ]);
    }

    private function resolveDeletedMaterial(string $family, int $id): ?Model
    {
        $modelClass = SupplyMaterialRegistry::modelForFamily($family);

        return $modelClass ? $modelClass::onlyTrashed()->find($id) : null;
    }

    /**
     * @return array<string, mixed>
     */
    private function serializeMaterial(string $family, Model $material): array
    {
        return [
            ...$material->toArray(),
            'family' => $family,
            'label' => SupplyMaterialLabelResolver::resolve($material),
        ];
    }
}
