<?php

namespace Database\Seeders;

use App\Models\SetType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SetTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SetType::create([
            'name' => 'Warmup',
        ]);
        SetType::create([
            'name' => 'Working',
        ]);
        SetType::create([
            'name' => 'Drop',
        ]);
        SetType::create([
            'name' => 'Up',
        ]);
    }
}
