<?php

namespace Database\Factories;

use App\Models\producttypes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type_id' => producttypes::factory(),
            'name' => fake('hu_HU')->word(),
        ];
    }
}
