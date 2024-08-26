<?php

namespace Database\Seeders;

use App\Models\Priority;
use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([PrioritySeeder::class]);
        Priority::all();
        Task::factory(10)->create();
    }
}
