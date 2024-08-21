<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Weather>
 */
class WeatherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'suhuUdara' => fake()->randomFloat(2, 20, 40),
            'probabilitas' => fake()->randomElement(['Berawan', 'Hujan Ringan', 'Hujan Sedang', 'Hujan Lebat', 'Hujan Sangat Lebat', 'Hujan Ekstrem']),
            'kelembapanUdara' => fake()->numberBetween(1, 100),
            'intensitasCahaya' => fake()->randomFloat(2, 10, 30000),
            'curahHujan' => fake()->randomFloat(2, 10, 30000),
            'kecepatanAngin' => fake()->randomFloat(2, 10, 100),
        ];
    }
}