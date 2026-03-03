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
                'date_naissance' => '2005-5-10',
                'tel' => '0647537593',
            ],
            [
                'id' => 2,
                'nom' => 'Sara',
                'prenom' => 'Diaz',
                'pays' => 'France',
                'date_naissance' => '1999-8-20',
                'tel' => '0654321987',
            ],
        ]);
    }
}
