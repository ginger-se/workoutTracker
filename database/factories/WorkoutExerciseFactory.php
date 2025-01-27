<?php

namespace Database\Factories;

use App\Models\Exercise;
use App\Models\Workout;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WorkoutExercise>
 */
class WorkoutExerciseFactory extends Factory {
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array {
    return [
      "workout_id" => Workout::all()->random()->id,
      "exercise_id" => Exercise::all()->random()->id,
      "position" => fake()->randomNumber(3),
    ];
  }
}
