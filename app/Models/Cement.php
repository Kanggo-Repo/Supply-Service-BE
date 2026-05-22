<?php

namespace App\Models;

use Database\Factories\CementFactory;

class Cement extends SupplyMaterial
{
    protected static function newFactory(): CementFactory
    {
        return CementFactory::new();
    }
}
