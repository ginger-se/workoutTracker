<?php

namespace Database\Factories;

use App\Models\Mezocycle;
use App\Models\WorkoutType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Workout>
 */
class WorkoutFactory extends Factory {
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array {
    return [
      "date" => now()->format('Y-m-d'),
      "status" => fake()->randomElement(["Completed", "In Progress", "Planned", "Skipped"]),
      "mezocycle_id" => Mezocycle::all()->random()->id,
      "workout_type_id" => WorkoutType::all()->random()->id,
    ];
  }
}
