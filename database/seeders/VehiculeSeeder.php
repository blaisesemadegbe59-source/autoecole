<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class VehiculeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('vehicules')->insert([
            ['immatriculation' => 'AB-123-CD', 'modele' => 'Yaris', 'marque' => 'Toyota', 'annee' => 2018],
            ['immatriculation' => 'XY-456-ZT', 'modele' => 'CBR 500', 'marque' => 'Honda', 'annee' => 2020],
        ]);
    }
}
