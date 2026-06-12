<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('formules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categorie_id')->constrained('categories')->onDelete('cascade');
            $table->string('libelle', 100);
            $table->decimal('tarif', 10, 2);
            $table->integer('heures_incluses')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('formules');
    }
};
