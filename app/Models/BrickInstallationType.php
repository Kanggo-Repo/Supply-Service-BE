<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrickInstallationType extends Model
{
    protected $fillable = [
        'name',
        'code',
        'description',
        'mortar_volume_per_m2',
        'waste_factor',
        'visible_side_width',
        'visible_side_height',
        'orientation',
        'bricks_per_sqm',
        'is_active',
        'display_order',
    ];

    protected function casts(): array
    {
        return [
            'mortar_volume_per_m2' => 'decimal:6',
            'waste_factor' => 'decimal:6',
            'bricks_per_sqm' => 'decimal:2',
            'is_active' => 'boolean',
            'display_order' => 'integer',
        ];
    }
}
