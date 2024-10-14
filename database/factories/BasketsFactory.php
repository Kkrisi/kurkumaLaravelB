<?php

namespace Database\Factories;

use App\Models\products;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\baskets>
 */
class BasketsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date'=> fake()->date,
            'item_id' => products::factory(),
            'user_id' => User::factory()
        ];
    }
}
