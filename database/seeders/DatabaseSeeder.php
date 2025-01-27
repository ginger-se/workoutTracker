<?php

namespace Database\Seeders;

use App\Models\Mezocycle;
use App\Models\MezocycleType;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
  /**
   * Seed the application's database.
   */
  public function run(): void {
    User::factory()->create([
      'id' => 1,
      'name' => 'Test User',
      'email' => 'test@example.com',
      'password' => 'password',
    ]);

    $this->call(MezocycleTypeSeeder::class);
    $this->call(SetTypeSeeder::class);
    $this->call(MuscleGroups::class);
    $this->call(ExerciseSeeder::class);
    $this->call(WorkoutTypes::class);
    $this->call(MezocycleSeeder::class);
    $this->call(WorkoutSeeder::class);
    $this->call(WorkoutExerciseSeeder::class);
  }
}
