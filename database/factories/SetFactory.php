<?php

namespace Database\Factories;

use App\Models\SetType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sets>
 */
class SetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reps' => fake()->numberBetween(1, 30),
            'weight' => fake()->numberBetween(5,405),
            'set_type_id' => SetType::factory(),
        ];
    }
}
