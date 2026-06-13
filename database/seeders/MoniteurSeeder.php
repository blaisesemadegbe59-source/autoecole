<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MoniteurSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('moniteurs')->insert([
            ['nom' => 'Adjovi', 'prenom' => 'Paul', 'email' => 'paul.adjovi@example.com', 'telephone' => '97000003', 'specialite' => 'Permis B'],
            ['nom' => 'Mensah', 'prenom' => 'Claudine', 'email' => 'claudine.mensah@example.com', 'telephone' => '97000004', 'specialite' => 'Permis A'],
        ]);
    }
}
