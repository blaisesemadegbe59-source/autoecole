<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidat_id')->constrained('candidats')->onDelete('cascade');
            $table->foreignId('formule_id')->constrained('formules')->onDelete('cascade');
            $table->date('date_inscription')->default(now());
            $table->decimal('tarif', 10, 2); // Copie du tarif de la formule au moment de l'inscription
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('inscriptions');
    }
};
