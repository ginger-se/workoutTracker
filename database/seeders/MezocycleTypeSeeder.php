<?php

namespace Database\Seeders;

use App\Models\Mezocycle;
use App\Models\MezocycleType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MezocycleTypeSeeder extends Seeder {
  /**
   * Run the database seeds.
   */
  public function run(): void {
    MezocycleType::create([
      'name' => 'Gain/Bulk',
    ]);

    MezocycleType::create([
      'name' => 'Strength',
    ]);

    MezocycleType::create([
      'name' => 'Speed',
    ]);

    MezocycleType::create([
      'name' => 'Balance',
    ]);

    MezocycleType::create([
      'name' => 'Flexibility',
    ]);

    MezocycleType::create([
      'name' => 'Power',
    ]);

    MezocycleType::create([
      'name' => 'Endurance',
    ]);
  }
}
