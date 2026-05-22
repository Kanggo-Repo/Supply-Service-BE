<?php

namespace App\Models\Concerns;

use App\Models\MaterialChangeLog;
use App\Services\Material\MaterialChangeRecorder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasMaterialChangeHistory
{
    public static function bootHasMaterialChangeHistory(): void
    {
        static::created(function (Model $model): void {
            app(MaterialChangeRecorder::class)->recordCreate($model);
        });

        static::updating(function (Model $model): void {
            app(MaterialChangeRecorder::class)->rememberOriginal($model);
        });

        static::updated(function (Model $model): void {
            app(MaterialChangeRecorder::class)->recordUpdate($model);
        });

        static::deleting(function (Model $model): void {
            app(MaterialChangeRecorder::class)->rememberOriginal($model);
        });

        static::deleted(function (Model $model): void {
            app(MaterialChangeRecorder::class)->recordDelete($model);
        });

        static::restoring(function (Model $model): void {
            app(MaterialChangeRecorder::class)->rememberOriginal($model);
        });

        static::restored(function (Model $model): void {
            app(MaterialChangeRecorder::class)->recordRestore($model);
        });
    }

    public function materialChangeLogs(): HasMany
    {
        return $this->hasMany(MaterialChangeLog::class, 'material_id')
            ->where('material_table', $this->getTable())
            ->orderByDesc('edited_at')
            ->orderByDesc('id');
    }

    public function materialHistoryKind(): string
    {
        return strtolower(class_basename($this));
    }
}
