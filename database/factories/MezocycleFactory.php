<?php

namespace Database\Factories;

use App\Models\MezocycleType;
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
      'mezocycle_type_id' => MezocycleType::all()->random()->id,
      'start_date' => now()->format('Y-m-d'),
      'end_date' => now()->addWeeks(fake()->randomElement([8, 9, 10, 11, 12]))->format('Y-m-d'),
    ];
  }
}
