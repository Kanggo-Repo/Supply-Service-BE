<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MortarFormula extends Model
{
    protected $fillable = [
        'name',
        'description',
        'cement_ratio',
        'sand_ratio',
        'water_ratio',
        'cement_kg_per_m3',
        'sand_m3_per_m3',
        'water_liter_per_m3',
        'expansion_factor',
        'cement_bag_type',
        'is_default',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'cement_ratio' => 'decimal:4',
            'sand_ratio' => 'decimal:4',
            'water_ratio' => 'decimal:4',
            'cement_kg_per_m3' => 'decimal:2',
            'sand_m3_per_m3' => 'decimal:4',
            'water_liter_per_m3' => 'decimal:2',
            'expansion_factor' => 'decimal:4',
            'is_default' => 'boolean',
            'is_active' => 'boolean',
        ];
    }
}
