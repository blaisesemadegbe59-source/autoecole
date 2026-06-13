<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class InscriptionSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('inscriptions')->insert([
            ['candidat_id' => 1, 'formule_id' => 1, 'date_inscription' => now(), 'tarif' => 150000],
            ['candidat_id' => 2, 'formule_id' => 2, 'date_inscription' => now(), 'tarif' => 100000],
        ]);
    }
}

