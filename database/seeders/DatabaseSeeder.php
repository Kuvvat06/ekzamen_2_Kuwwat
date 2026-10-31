<?php

namespace Database\Seeders;

use App\Models\Computer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    
    public function run(): void
    {
        // User::factory(10)->create();

        Computer::factory(20)->create();
    }
}
