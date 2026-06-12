<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('versements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inscription_id')->constrained('inscriptions')->onDelete('cascade');
            $table->date('date_versement')->default(now());
            $table->decimal('montant', 10, 2);
            $table->enum('mode_paiement', ['cash', 'mobile_money', 'carte'])->default('cash');
            $table->string('reference')->nullable(); // numéro de reçu ou transaction
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('versements');
    }
};
