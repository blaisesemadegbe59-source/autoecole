<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ExamenSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('examens')->insert([
            ['candidat_id' => 1, 'categorie_id' => 2, 'date_examen' => now()->addWeeks(2), 'type' => 'pratique', 'resultat' => 'en_attente'],
            ['candidat_id' => 2, 'categorie_id' => 1, 'date_examen' => now()->addWeeks(3), 'type' => 'theorique', 'resultat' => 'en_attente'],
        ]);
    }
}

