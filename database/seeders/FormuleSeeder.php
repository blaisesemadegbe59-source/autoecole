<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FormuleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('formules')->insert([
            ['categorie_id' => 2, 'libelle' => 'Pack 20h Permis B', 'tarif' => 150000, 'heures_incluses' => 20],
            ['categorie_id' => 1, 'libelle' => 'Pack 15h Permis A', 'tarif' => 100000, 'heures_incluses' => 15],
        ]);
    }
}

