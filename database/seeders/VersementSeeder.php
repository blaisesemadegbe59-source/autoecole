<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class VersementSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('versements')->insert([
            ['inscription_id' => 1, 'date_versement' => now(), 'montant' => 75000, 'mode_paiement' => 'cash', 'reference' => 'REC-001'],
            ['inscription_id' => 2, 'date_versement' => now(), 'montant' => 50000, 'mode_paiement' => 'mobile_money', 'reference' => 'MM-002'],
        ]);
    }
}

