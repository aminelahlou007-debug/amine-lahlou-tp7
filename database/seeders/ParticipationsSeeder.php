<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParticipationsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('participations')->insert([
            [
                'id' => 1,
                'films_id' => 1,
                'acteur_id' => 1,
                'role' => 'Hero',
                'typeRole' => 'principal',
            ],
            [
                'id' => 2,
                'films_id' => 1,
                'acteur_id' => 2,
                'role' => 'Friend',
                'typeRole' => 'secondaire',
            ],
        ]);
    }
}
