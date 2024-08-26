<?php

namespace Database\Seeders;

use App\Models\Priority;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Priority::create([
            'name' => 'high',
            'description' => 'High priority'
        ]);
        Priority::create([
            'name' => 'medium',
            'description' => 'Medium priority'
        ]);
        Priority::create([
            'name' => 'low',
            'description' => 'Low priority'
        ]);
    }
}
