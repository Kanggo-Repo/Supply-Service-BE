<?php

namespace App\Services\Material;

use App\Models\MaterialChangeLog;
use App\Support\Material\MaterialAuditContext;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use InvalidArgumentException;

class MaterialHistoryRestoreService
{
    public function restore(Model $material, MaterialChangeLog $targetLog): bool
    {
        if (
            $targetLog->material_table !== $material->getTable() ||
            (int) $targetLog->material_id !== (int) $material->getKey()
        ) {
            throw new InvalidArgumentException('History log does not belong to the selected material.');
        }

        $targetState = is_array($targetLog->after_values) ? $targetLog->after_values : [];

        if ($targetState === []) {
            foreach ((array) ($targetLog->changes ?? []) as $field => $change) {
                if (is_array($change) && array_key_exists('to', $change)) {
                    $targetState[(string) $field] = $change['to'];
                }
            }
        }

        if ($targetState === []) {
            throw new InvalidArgumentException('Selected history snapshot has no restorable values.');
        }

        $restorable = [];

        $restorableColumns = array_values(array_intersect(
            array_diff($material->getFillable(), ['created_at', 'updated_at', 'material_kind']),
            Schema::getColumnListing($material->getTable()),
        ));

        foreach ($restorableColumns as $field) {
            if (! array_key_exists($field, $targetState)) {
                continue;
            }

            $restorable[$field] = $targetState[$field];
        }

        if ($restorable === []) {
            return false;
        }

        $changed = false;

        foreach ($restorable as $field => $value) {
            if (! $this->valuesAreEquivalent($material->getAttribute($field), $value)) {
                $changed = true;
                break;
            }
        }

        if (! $changed) {
            return false;
        }

        return MaterialAuditContext::run([
            'action' => 'restored',
        ], function () use ($material, $restorable): bool {
            $material->fill($restorable);
            $material->save();

            return true;
        });
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
}
