<?php

namespace Database\Factories;

use App\Models\Brick;
use App\Models\StoreLocation;
use App\Models\StoreMaterialAvailability;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<StoreMaterialAvailability>
 */
class StoreMaterialAvailabilityFactory extends Factory
{
    protected $model = StoreMaterialAvailability::class;

    public function definition(): array
    {
        return [
            'store_location_id' => StoreLocation::factory(),
            'materialable_type' => Brick::class,
            'materialable_id' => Brick::factory(),
        ];
    }
}
