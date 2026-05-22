<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['material_type', 'is_visible', 'display_order'])]
class MaterialSetting extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'is_visible' => 'bool',
            'display_order' => 'int',
        ];
    }

    public static function getMaterialLabel(string $type): string
    {
        return [
            'brick' => 'Bata',
            'cat' => 'Cat',
            'cement' => 'Semen',
            'nat' => 'Nat',
            'sand' => 'Pasir',
            'ceramic' => 'Keramik',
            'steel' => 'Besi',
            'kasa_gypsum' => 'Kasa Gypsum',
            'paku_tembak' => 'Paku Tembak',
            'paku' => 'Paku',
            'materials' => 'Material',
        ][$type] ?? ucfirst(str_replace('_', ' ', $type));
    }
}
