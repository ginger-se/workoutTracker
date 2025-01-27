<?php

namespace Database\Seeders;

use App\Models\WorkoutType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkoutTypes extends Seeder {
  /**
   * Run the database seeds.
   */
  public function run(): void {

    WorkoutType::create([
      'name' => 'Push',
    ]);
    WorkoutType::create([
      'name' => 'Pull',
    ]);
    WorkoutType::create([
      'name' => 'Legs',
    ]);
    WorkoutType::create([
      'name' => 'Misc',
    ]);
  }
}
