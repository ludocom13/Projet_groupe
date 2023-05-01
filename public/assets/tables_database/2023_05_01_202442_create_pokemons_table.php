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
        Schema::create('pokemons', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('ref', 191)->default('REFERENCE');
            $table->string('type', 191)->default('TYPE POKEMON');
            $table->string('nom', 191)->default('NOM DU POKEMON');
            $table->integer('attaque')->default(0);
            $table->unsignedInteger('defense')->default(0);
            $table->unsignedInteger('pv')->default(0);
            $table->text('description')->nullable();
            $table->dateTime('datEdite');
            $table->char('statut', 191)->default('ACTIF');
            $table->dateTime('dateMaj');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemons');
    }
};
