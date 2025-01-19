<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mezocycle>
 */
class MezocycleFactory extends Factory {
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array {
    return [
      'user_id' => 1,
      // 'type' => fake()->randomElement(['mezocycle', 'cycling', 'running']),
      'start_date' => now(),
      'end_date' => now()->addWeeks(fake()->randomElement([8, 9, 10, 11, 12]))
    ];
  }
}
