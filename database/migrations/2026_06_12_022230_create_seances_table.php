<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('seances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inscription_id')->constrained('inscriptions')->onDelete('cascade');
            $table->foreignId('moniteur_id')->constrained('moniteurs')->onDelete('cascade');
            $table->foreignId('vehicule_id')->constrained('vehicules')->onDelete('cascade');
            $table->dateTime('date_heure'); // date et heure de la séance
            $table->enum('statut', ['planifiée', 'réalisée', 'annulée'])->default('planifiée');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('seances');
    }
};
