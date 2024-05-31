<?php

namespace Database\Seeders;

use App\Models\Skil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skil::create([
            'name' => 'PHP',
            'slug' => 'php',
        ]);
    }
}
