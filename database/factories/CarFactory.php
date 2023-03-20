<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand' => $this->faker->randomElement(['Tesla', 'BMW', 'Audi', "Skoda"]),
            'model' => $this->faker->word(),
            'year' => $this->faker->numberBetween(2000, 2023),
            'max_speed' => $this->faker->numberBetween(250, 320),
            'is_automatic' => $this->faker->boolean(),
            'engine' => $this->faker->randomElement(['gas', 'diesel', 'electric', 'hybrid']),
            'number_of_doors' => $this->faker->numberBetween(2, 5),
        ];
    }
}
