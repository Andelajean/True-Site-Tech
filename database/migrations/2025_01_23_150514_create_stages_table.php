<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stages', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nom et prénom
            $table->string('email'); // Adresse email (unique pour éviter les doublons)
            $table->string('phone'); // Numéro de téléphone
            $table->string('cv'); // Chemin du fichier CV
            $table->string('certificat'); // Chemin du fichier certificat de scolarité
            $table->text('message'); // Message facultatif
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stages');
    }
};
