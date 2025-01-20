<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exercise::create([
            'name' => 'squat',
            'description' => 'go up and down with your legs',
            'tips' => 'Don\'t be a baby and do it',
            'muscle_group_id' => 1,
            'routine_id' => 1,
        ]);
        Exercise::create([
            'name' => 'bench press',
            'description' => 'go down and up with your arms and chest',
            'tips' => 'Control the weight all the way down to your chest',
            'muscle_group_id' => 2,
            'routine_id' => 1,
        ]);
        Exercise::create([
            'name' => 'pull-ups',
            'description' => 'hang on a bar and pull your chin to the bar',
            'tips' => 'Don\'t be a baby and do it',
            'muscle_group_id' => 3,
            'routine_id' => 1,
        ]);
    }
}
