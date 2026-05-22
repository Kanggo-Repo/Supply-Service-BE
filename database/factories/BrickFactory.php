<?php

namespace Database\Factories;

use App\Models\Brick;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Brick>
 */
class BrickFactory extends Factory
{
    protected $model = Brick::class;

    public function definition(): array
    {
        return [
            'material_name' => 'Bata',
            'photo' => null,
            'brand' => fake()->company(),
            'type' => fake()->word(),
            'form' => fake()->optional()->randomElement(['Persegi', 'Berlubang']),
            'dimension_length' => fake()->randomFloat(2, 10, 40),
            'dimension_width' => fake()->randomFloat(2, 5, 20),
            'dimension_height' => fake()->randomFloat(2, 5, 20),
            'package_volume' => fake()->randomFloat(6, 0.001, 1),
            'store' => fake()->company(),
            'address' => fake()->streetAddress(),
            'short_address' => fake()->city(),
            'store_location_id' => null,
            'price_per_piece' => fake()->randomFloat(2, 500, 5000),
            'comparison_price_per_m3' => fake()->randomFloat(2, 100000, 5000000),
            'package_type' => 'eceran',
            'deleted_by' => null,
        ];
    }
}
