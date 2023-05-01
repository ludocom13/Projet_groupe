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
            $table->string('ref')->default('REFERENCE');
            $table->unsignedInteger('userID')->index();
            $table->string('categorie')->default('CATEGORIE');
            $table->integer('prix_depart')->default(102030405);
            $table->integer('prix_final')->default(102030405);
            $table->string('modele')->default('MODELE');
            $table->string('marque')->default('MARQUE');
            $table->integer('puissance')->default(0);
            $table->integer('annee')->default(2000);
            $table->text('message');
            $table->dateTime('datEdite');
            $table->dateTime('date_fin');
            $table->char('statut')->default('ACTIF');
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
