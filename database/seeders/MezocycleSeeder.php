<?php

namespace Database\Seeders;

use App\Models\Mezocycle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MezocycleSeeder extends Seeder {
  /**
   * Run the database seeds.
   */
  public function run(): void {
    Mezocycle::factory(5)->create();
  }
}
