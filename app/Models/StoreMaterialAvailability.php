<?php

namespace App\Models;

use Database\Factories\StoreMaterialAvailabilityFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

#[Fillable(['store_location_id', 'materialable_type', 'materialable_id'])]
class StoreMaterialAvailability extends Model
{
    use HasFactory;

    protected static function newFactory(): StoreMaterialAvailabilityFactory
    {
        return StoreMaterialAvailabilityFactory::new();
    }

    public function storeLocation(): BelongsTo
    {
        return $this->belongsTo(StoreLocation::class);
    }

    public function materialable(): MorphTo
    {
        return $this->morphTo();
    }
}
