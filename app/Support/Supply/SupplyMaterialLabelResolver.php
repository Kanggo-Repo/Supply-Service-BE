<?php

namespace App\Support\Supply;

use Illuminate\Database\Eloquent\Model;

class SupplyMaterialLabelResolver
{
    public static function resolve(Model $material): string
    {
        foreach (['material_name', 'cement_name', 'sand_name', 'cat_name', 'nat_name'] as $field) {
            $value = $material->getAttribute($field);

            if (! is_string($value)) {
                continue;
            }

            $value = trim($value);

            if ($value === '' || self::isGenericMaterialLabel($field, $value)) {
                continue;
            }

            return $value;
        }

        $brand = trim((string) ($material->getAttribute('brand') ?? ''));
        $type = trim((string) ($material->getAttribute('type') ?? ''));

        if ($brand !== '' && $type !== '') {
            return "{$brand} {$type}";
        }

        if ($brand !== '') {
            return $brand;
        }

        if ($type !== '') {
            return $type;
        }

        return class_basename($material).' #'.$material->getKey();
    }

    private static function isGenericMaterialLabel(string $field, string $value): bool
    {
        if ($field !== 'material_name') {
            return false;
        }

        return in_array($value, [
            'Bata',
            'Keramik',
            'Besi',
            'Kasa Gypsum',
            'Paku Tembak',
            'Paku',
        ], true);
    }
}
