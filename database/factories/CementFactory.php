<?php

namespace Database\Factories;

use App\Models\Cement;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Cement>
 */
class CementFactory extends Factory
{
    protected $model = Cement::class;

    public function definition(): array
    {
        return [
            'cement_name' => fake()->company().' Cement',
            'photo' => null,
            'brand' => fake()->company(),
            'type' => fake()->word(),
            'sub_brand' => fake()->optional()->word(),
            'code' => strtoupper(fake()->bothify('??###')),
            'color' => fake()->safeColorName(),
            'package_unit' => 'zak',
            'package_weight_gross' => fake()->randomFloat(2, 25, 50),
            'package_weight_net' => fake()->randomFloat(2, 10, 50),
            'package_volume' => fake()->randomFloat(6, 0.001, 1),
            'store' => fake()->company(),
            'address' => fake()->streetAddress(),
            'short_address' => fake()->city(),
            'store_location_id' => null,
            'package_price' => fake()->randomFloat(2, 30000, 150000),
            'price_unit' => 'kg',
            'comparison_price_per_kg' => fake()->randomFloat(2, 1000, 10000),
            'material_kind' => 'cement',
            'nat_name' => null,
            'deleted_by' => null,
        ];
    }
}
