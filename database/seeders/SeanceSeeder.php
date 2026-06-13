<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SeanceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('seances')->insert([
            ['inscription_id' => 1, 'moniteur_id' => 1, 'vehicule_id' => 1, 'date_heure' => now()->addDays(1), 'statut' => 'planifiée'],
            ['inscription_id' => 2, 'moniteur_id' => 2, 'vehicule_id' => 2, 'date_heure' => now()->addDays(2), 'statut' => 'planifiée'],
        ]);
    }
}
