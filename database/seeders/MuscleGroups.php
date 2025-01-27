<?php

namespace Database\Seeders;

use App\Models\MuscleGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MuscleGroups extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MuscleGroup::create([
            'name' => 'Chest',
            'workout_type_id' => 1,
        ]);
        MuscleGroup::create([
            'name' => 'triceps',
            'workout_type_id' => 1,
        ]);
        MuscleGroup::create([
            'name' => 'biceps',
            'workout_type_id' => 2,
        ]);
        MuscleGroup::create([
            'name' => 'shoulders',
            'workout_type_id' => 1,
        ]);
        MuscleGroup::create([
            'name' => 'Lats',
            'workout_type_id' => 2,
        ]);
        MuscleGroup::create([
            'name' => 'Traps',
            'workout_type_id' => 2,
        ]);
        MuscleGroup::create([
            'name' => 'erector spinae',
            'workout_type_id' => 2,
        ]);
        MuscleGroup::create([
            'name' => 'abs',
            'workout_type_id' => 4,
        ]);
        MuscleGroup::create([
            'name' => 'quadriceps',
            'workout_type_id' => 3,
        ]);
        MuscleGroup::create([
            'name' => 'hamstrings',
            'workout_type_id' => 3,
        ]);
        MuscleGroup::create([
            'name' => 'calves',
            'workout_type_id' => 3,
        ]);
        MuscleGroup::create([
            'name' => 'glutes',
            'workout_type_id' => 3,
        ]);
    }
}
