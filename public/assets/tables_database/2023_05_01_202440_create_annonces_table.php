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
        Schema::create('annonces', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('ref', 191)->default('REFERENCE');
            $table->unsignedInteger('userID')->index();
            $table->string('categorie', 191)->default('CATEGORIE');
            $table->integer('prix_depart')->default(102030405);
            $table->integer('prix_final')->default(102030405);
            $table->string('modele', 191)->default('MODELE');
            $table->string('marque', 191)->default('MARQUE');
            $table->integer('puissance')->default(0);
            $table->integer('annee')->default(2000);
            $table->text('message');
            $table->dateTime('datEdite');
            $table->dateTime('date_fin');
            $table->char('statut', 191)->default('ACTIF');
            $table->dateTime('dateMaj');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonces');
    }
};
