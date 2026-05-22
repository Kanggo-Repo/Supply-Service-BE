<?php

namespace App\Models;

use Database\Factories\StoreLocationFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    'store_id',
    'address',
    'district',
    'city',
    'province',
    'latitude',
    'longitude',
    'place_id',
    'formatted_address',
    'contact_name',
    'contact_phone',
])]
class StoreLocation extends Model
{
    use HasFactory;

    protected static function newFactory(): StoreLocationFactory
    {
        return StoreLocationFactory::new();
    }

    protected function casts(): array
    {
        return [
            'latitude' => 'float',
            'longitude' => 'float',
        ];
    }

    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }

    public function materialAvailabilities(): HasMany
    {
        return $this->hasMany(StoreMaterialAvailability::class);
    }

    protected function fullAddress(): Attribute
    {
        return Attribute::get(function (): ?string {
            $parts = collect([
                $this->address,
                $this->district,
                $this->city,
                $this->province,
            ])->filter(fn (?string $value): bool => filled($value))->values();

            return $parts->isEmpty() ? null : $parts->implode(', ');
        });
    }

    protected function resolvedAddress(): Attribute
    {
        return Attribute::get(function (): ?string {
            if (filled($this->formatted_address)) {
                return $this->formatted_address;
            }

            $parts = collect([
                $this->address,
                $this->city,
                $this->province,
            ])->filter(fn (?string $value): bool => filled($value))->values();

            return $parts->isEmpty() ? null : $parts->implode(', ');
        });
    }

    protected function materialSnapshotAddress(): Attribute
    {
        return Attribute::get(function (): ?string {
            foreach ([$this->address, $this->full_address, $this->formatted_address] as $candidate) {
                if (filled($candidate)) {
                    return $candidate;
                }
            }

            return null;
        });
    }
}
