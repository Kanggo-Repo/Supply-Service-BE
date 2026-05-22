<?php

namespace App\Models;

use Database\Factories\BrickFactory;

class Brick extends SupplyMaterial
{
    protected static function newFactory(): BrickFactory
    {
        return BrickFactory::new();
    }
}
