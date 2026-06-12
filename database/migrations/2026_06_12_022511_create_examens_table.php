<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('examens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidat_id')->constrained('candidats')->onDelete('cascade');
            $table->foreignId('categorie_id')->constrained('categories')->onDelete('cascade');
            $table->dateTime('date_examen');
            $table->enum('type', ['theorique', 'pratique'])->default('theorique');
            $table->enum('resultat', ['reussi', 'echoue', 'en_attente'])->default('en_attente');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('examens');
    }
};
