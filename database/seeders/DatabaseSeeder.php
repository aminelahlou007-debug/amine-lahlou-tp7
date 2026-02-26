<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Run seeders in a simple order
        $this->call([
            FilmsSeeder::class,
            ActeursSeeder::class,
            ParticipationsSeeder::class,
        ]);
    }
}
