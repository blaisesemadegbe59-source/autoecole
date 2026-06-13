<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CandidatSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('candidats')->insert([
            ['nom' => 'Kouassi', 'prenom' => 'Jean', 'date_naissance' => '1998-05-12', 'email' => 'jean.kouassi@example.com', 'telephone' => '97097031'],
            ['nom' => 'Ahouanvo', 'prenom' => 'Marie', 'date_naissance' => '2000-03-22', 'email' => 'marie.ahouanvo@example.com', 'telephone' => '97006542'],
        ]);
    }
}

