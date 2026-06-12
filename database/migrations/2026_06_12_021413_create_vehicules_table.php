<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('immatriculation', 50)->unique(); // ex: AA-123-BB
            $table->string('modele', 100)->nullable();       // ex: Toyota Yaris
            $table->string('marque', 100)->nullable();       // ex: Toyota
            $table->year('annee')->nullable();               // année de fabrication
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('vehicules');
    }
};
