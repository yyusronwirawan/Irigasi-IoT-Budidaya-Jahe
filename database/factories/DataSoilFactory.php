<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataSoil>
 */
class DataSoilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'temp_1' => fake()->randomFloat(2, 20, 40),
            'temp_2' => fake()->randomFloat(2, 20, 40),
            'hum_1' => fake()->numberBetween(1, 100),
            'hum_2' => fake()->numberBetween(1, 100),
        ];
    }
}