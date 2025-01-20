<?php

namespace Database\Factories;

use App\Models\MuscleGroup;
use App\Models\Routine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exercise>
 */
class ExerciseFactory extends Factory {
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array {
    return [
      'name' => fake()->name(),
      'description' => fake()->realText(),
      'tips' => fake()->realText(),
      'muscle_group_id' => MuscleGroup::factory(),
      'routine_id' => Routine::factory(),
    ];
  }
}
