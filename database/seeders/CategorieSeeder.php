<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorieSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            ['libelle' => 'Permis A'],
            ['libelle' => 'Permis B'],
            ['libelle' => 'Permis C'],
            ['libelle' => 'Permis C1'],
            ['libelle' => 'Permis D'],
            ['libelle' => 'Permis DR'],
        ]);
    }
}

