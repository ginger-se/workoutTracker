<?php

namespace Database\Seeders;

use App\Models\WorkoutType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkoutTypes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        WorkoutType::create([
            'name' => 'push',
        ]);
        WorkoutType::create([
            'name' => 'pull',
        ]);
        WorkoutType::create([
            'name' => 'legs',
        ]);
        WorkoutType::create([
            'name' => 'misc',
        ]);

    }
}
