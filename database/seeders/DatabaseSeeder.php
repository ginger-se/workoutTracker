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
    Mezocycle::factory(5)->create();
  }
}
