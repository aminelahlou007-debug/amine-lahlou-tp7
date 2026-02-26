<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('films')->insert([
            [
                'id' => 1,
                'titre' => 'Film A',
                'pays' => 'Maroc',
                'annee' => 2026,
                'duree' => '01:30:00',
                'genre' => 'Drama',
            ],
            [
                'id' => 2,
                'titre' => 'Film B',
                'pays' => 'France',
                'annee' => 2020,
                'duree' => '02:00:00',
                'genre' => 'Action',
            ],
        ]);
    }
}
