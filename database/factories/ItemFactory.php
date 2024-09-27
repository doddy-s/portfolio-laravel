<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word() . " " . fake()->word(),
            'desc' => fake()->realTextBetween(50, 100),
            'price' => fake()->numberBetween(10, 100) * 10000,
            'stock' => fake()->numberBetween(1, 100)
        ];
    }
}
