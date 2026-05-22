<?php

namespace App\Services\Material;

use App\Models\MaterialChangeLog;
use App\Support\Material\MaterialAuditContext;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class MaterialChangeRecorder
{
    /**
     * @var array<string, array<string, mixed>>
     */
    protected static array $originalSnapshots = [];

    public function rememberOriginal(Model $material): void
    {
        if (! $this->canRecordChanges()) {
            return;
        }

        $key = $this->snapshotKey($material);

        if ($key === null) {
            return;
        }

        self::$originalSnapshots[$key] = $this->extractAuditableAttributes($material);
    }

    public function recordCreate(Model $material): void
    {
        $this->record($material, 'created', [], $this->extractCurrentAuditableAttributes($material->fresh() ?? $material));
    }

    public function recordUpdate(Model $material): void
    {
        $key = $this->snapshotKey($material);
        $beforeValues = $key ? (self::$originalSnapshots[$key] ?? $this->extractAuditableAttributes($material)) : [];

        $action = MaterialAuditContext::action();
        $action = in_array($action, ['updated', 'restored'], true) ? $action : 'updated';

        $this->record($material, $action, $beforeValues, $this->extractCurrentAuditableAttributes($material->fresh() ?? $material));
    }

    public function recordDelete(Model $material): void
    {
        $key = $this->snapshotKey($material);
        $beforeValues = $key ? (self::$originalSnapshots[$key] ?? $this->extractAuditableAttributes($material)) : [];

        $this->record($material, 'deleted', $beforeValues, []);
    }

    public function recordRestore(Model $material): void
    {
        $key = $this->snapshotKey($material);
        $beforeValues = $key ? (self::$originalSnapshots[$key] ?? $this->extractAuditableAttributes($material)) : [];

        $this->record($material, 'restored', $beforeValues, $this->extractCurrentAuditableAttributes($material->fresh() ?? $material));
    }

    /**
     * @param  array<string, mixed>  $beforeValues
     * @param  array<string, mixed>  $afterValues
     */
    private function record(Model $material, string $action, array $beforeValues, array $afterValues): void
    {
        if (! $this->canRecordChanges()) {
            return;
        }

        $requestBatch = $this->requestBatchId();

        if ($requestBatch === null) {
            return;
        }

        $changes = $this->buildChanges($beforeValues, $afterValues);

        if ($changes === []) {
            return;
        }

        MaterialChangeLog::query()->updateOrCreate([
            'material_table' => $material->getTable(),
            'material_id' => $material->getKey(),
            'request_batch' => $requestBatch,
            'action' => $action,
        ], [
            'material_kind' => method_exists($material, 'materialHistoryKind')
                ? $material->materialHistoryKind()
                : strtolower(class_basename($material)),
            'user_id' => MaterialAuditContext::userId(),
            'changes' => $changes,
            'before_values' => $beforeValues,
            'after_values' => $afterValues,
            'edited_at' => now(),
        ]);
    }

    private function requestBatchId(): ?string
    {
        $contextBatchId = MaterialAuditContext::batchId();

        if ($contextBatchId !== null) {
            return $contextBatchId;
        }

        if (! app()->bound('request')) {
            return null;
        }

        $request = request();
        $batchId = $request->attributes->get('_material_change_request_batch');

        if (is_string($batchId) && $batchId !== '') {
            return $batchId;
        }

        $batchId = (string) Str::uuid();
        $request->attributes->set('_material_change_request_batch', $batchId);

        return $batchId;
    }

    /**
     * @return array<string, mixed>
     */
    private function extractAuditableAttributes(Model $material): array
    {
        $snapshot = [];
        $columns = $this->auditableColumns($material);

        foreach ($columns as $field) {
            $snapshot[$field] = $this->normalizeValue($field, $material->getRawOriginal($field));
        }

        return $snapshot;
    }

    /**
     * @return array<string, mixed>
     */
    private function extractCurrentAuditableAttributes(Model $material): array
    {
        $snapshot = [];
        $columns = $this->auditableColumns($material);

        foreach ($columns as $field) {
            $snapshot[$field] = $this->normalizeValue($field, $material->getAttribute($field));
        }

        return $snapshot;
    }

    /**
     * @param  array<string, mixed>  $beforeValues
     * @param  array<string, mixed>  $afterValues
     * @return array<string, array{from:mixed,to:mixed}>
     */
    private function buildChanges(array $beforeValues, array $afterValues): array
    {
        $changes = [];

        foreach (array_unique(array_merge(array_keys($beforeValues), array_keys($afterValues))) as $field) {
            $before = $beforeValues[$field] ?? null;
            $after = $afterValues[$field] ?? null;

            if ($this->valuesAreEquivalent($before, $after)) {
                continue;
            }

            $changes[$field] = [
                'from' => $before,
                'to' => $after,
            ];
        }

        return $changes;
    }

    private function valuesAreEquivalent(mixed $before, mixed $after): bool
    {
        if ($before === $after) {
            return true;
        }

        if (is_numeric($before) && is_numeric($after)) {
            return (float) $before === (float) $after;
        }

        return false;
    }

    private function normalizeValue(string $field, mixed $value): mixed
    {
        if (is_null($value) || is_bool($value)) {
            return $value;
        }

        if (is_numeric($value)) {
            return str_ends_with($field, '_id') ? (int) $value : (float) $value;
        }

        if (is_array($value)) {
            return array_map(fn ($item) => $this->normalizeValue($field, $item), $value);
        }

        return is_string($value) ? trim($value) : $value;
    }

    private function canRecordChanges(): bool
    {
        return Schema::hasTable('material_change_logs');
    }

    /**
     * @return list<string>
     */
    private function auditableColumns(Model $material): array
    {
        $columns = array_values(array_intersect(
            array_diff($material->getFillable(), ['created_at', 'updated_at', 'material_kind']),
            Schema::getColumnListing($material->getTable()),
        ));

        if (Schema::hasColumn($material->getTable(), 'deleted_at')) {
            $columns[] = 'deleted_at';
        }

        return array_values(array_unique($columns));
    }

    private function snapshotKey(Model $material): ?string
    {
        $requestBatch = $this->requestBatchId();

        if ($requestBatch === null || ! $material->getKey()) {
            return null;
        }

        return implode('|', [$requestBatch, $material->getTable(), $material->getKey()]);
    }
}
