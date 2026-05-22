<?php

namespace App\Models;

use Database\Factories\StoreFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

#[Fillable(['name'])]
class Store extends Model
{
    use HasFactory;

    protected static function newFactory(): StoreFactory
    {
        return StoreFactory::new();
    }

    public function locations(): HasMany
    {
        return $this->hasMany(StoreLocation::class);
    }

    public function materialAvailabilities(): HasManyThrough
    {
        return $this->hasManyThrough(
            StoreMaterialAvailability::class,
            StoreLocation::class,
            'store_id',
            'store_location_id',
            'id',
            'id',
        );
    }
}
