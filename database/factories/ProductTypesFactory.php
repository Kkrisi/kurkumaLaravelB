<?php

namespace Database\Factories;

use App\Models\producttypes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product_types>
 */
class ProductTypesFactory extends Factory
{   
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake('hu_HU')->name(),
            'description' => fake('hu_HU')->text(100),
            'cost' => fake()->numberBetween(500,20000),
        ];
    }
}
