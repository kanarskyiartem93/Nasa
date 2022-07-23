<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NearEarthObject>
 */
class NearEarthObjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'referenced' => $this->faker->randomNumber(),
            'name' => $this->faker->name(),
            'speed' => $this->faker->randomNumber(),
            'is_hazardous' => $this->faker->boolean,
            'date' => $this->faker->date,
        ];
    }
}
