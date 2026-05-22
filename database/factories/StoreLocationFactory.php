<?php

namespace Database\Factories;

use App\Models\Store;
use App\Models\StoreLocation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<StoreLocation>
 */
class StoreLocationFactory extends Factory
{
    protected $model = StoreLocation::class;

    public function definition(): array
    {
        return [
            'store_id' => Store::factory(),
            'address' => fake()->streetAddress(),
            'district' => fake()->citySuffix(),
            'city' => fake()->city(),
            'province' => fake()->state(),
            'latitude' => fake()->latitude(),
            'longitude' => fake()->longitude(),
            'place_id' => fake()->uuid(),
            'formatted_address' => null,
            'contact_name' => fake()->name(),
            'contact_phone' => fake()->phoneNumber(),
        ];
    }
}
