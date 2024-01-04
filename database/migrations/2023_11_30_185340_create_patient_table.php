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
        Schema::create('patient', function (Blueprint $table) {
            $table->id('ID_Patient')->autoIncrement();
            $table->unsignedBigInteger('ID_Utilisateur');
            $table->foreign('ID_Utilisateur')->references('ID_Utilisateur')->on('Utilisateur');
            $table->integer('Niveau_Addiction')->nullable();
            $table->integer('Moyenne_Heures_Jeu_Semaine')->nullable();
            $table->integer('Moyenne_Mois_Jeu')->nullable();
            $table->integer('Score_Insomnie')->nullable();
            $table->integer('Score_Somnolence_Excessive')->nullable();
            $table->integer('Score_Anxiete')->nullable();
            $table->integer('Score_Depression')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient');
    }
};
