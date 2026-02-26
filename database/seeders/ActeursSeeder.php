<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActeursSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('acteurs')->insert([
            [
                'id' => 1,
                'nom' => 'Ben',
                'prenom' => 'Ali',
                'pays' => 'Maroc',
                'date_naissance' => '1990-05-10',
                'tel' => '0600000000',
            ],
            [
                'id' => 2,
                'nom' => 'Sara',
                'prenom' => 'Diaz',
                'pays' => null,
                'date_naissance' => null,
                'tel' => null,
            ],
        ]);
    }
}
