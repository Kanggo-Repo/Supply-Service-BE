<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\MaterialChangeLog;
use App\Services\Material\MaterialHistoryRestoreService;
use App\Support\Supply\SupplyMaterialLabelResolver;
use App\Support\Supply\SupplyMaterialRegistry;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;

class MaterialHistoryApiController extends Controller
{
    public function __construct(private MaterialHistoryRestoreService $restoreService) {}

    public function index(string $family, int $id): JsonResponse
    {
        $material = $this->resolveMaterial($family, $id);

        if (! $material) {
            return response()->json(['message' => 'Material not found.'], 404);
        }

        $history = MaterialChangeLog::query()
            ->where('material_table', $material->getTable())
            ->where('material_id', $material->getKey())
            ->with('user')
            ->orderByDesc('edited_at')
            ->orderByDesc('id')
            ->get()
            ->map(fn (MaterialChangeLog $log): array => [
                'id' => $log->id,
                'action' => $log->action,
                'request_batch' => $log->request_batch,
                'edited_at' => $log->edited_at?->toIso8601String(),
                'actor' => [
                    'id' => $log->user_id,
                    'name' => $log->user?->name,
                    'email' => $log->user?->email,
                ],
                'changes' => collect((array) ($log->changes ?? []))
                    ->map(fn (array $change, string $field): array => [
                        'field' => $field,
                        'label' => MaterialChangeLog::labelForField($field),
                        'from' => $change['from'] ?? null,
                        'to' => $change['to'] ?? null,
                    ])
                    ->values()
                    ->all(),
            ])
            ->values()
            ->all();

        return response()->json([
            'data' => $history,
            'material' => [
                'id' => $material->getKey(),
                'family' => SupplyMaterialRegistry::normalizeFamily($family),
                'label' => SupplyMaterialLabelResolver::resolve($material),
            ],
        ]);
    }

    public function restore(string $family, int $id, int $logId): JsonResponse
    {
        $material = $this->resolveMaterial($family, $id);

        if (! $material) {
            return response()->json(['message' => 'Material not found.'], 404);
        }

        $log = MaterialChangeLog::query()->find($logId);

        if (! $log) {
            return response()->json(['message' => 'History log not found.'], 404);
        }

        $changed = $this->restoreService->restore($material, $log);

        if (! $changed) {
            return response()->json([
                'message' => 'Selected history snapshot already matches current material values.',
                'data' => $this->serializeMaterial(SupplyMaterialRegistry::normalizeFamily($family), $material->fresh()),
            ]);
        }

        return response()->json([
            'message' => 'Material history restored successfully',
            'data' => $this->serializeMaterial(SupplyMaterialRegistry::normalizeFamily($family), $material->fresh()),
        ]);
    }

    private function resolveMaterial(string $family, int $id): ?Model
    {
        $modelClass = SupplyMaterialRegistry::modelForFamily($family);

        return $modelClass ? $modelClass::withTrashed()->find($id) : null;
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
