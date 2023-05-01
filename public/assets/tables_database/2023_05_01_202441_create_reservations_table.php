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
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('ref', 191)->default('REFERENCE');
            $table->string('nomV', 191)->default('NOM VOYAGEUR');
            $table->string('prenom', 191)->default('PRENOM VOYAGEUR');
            $table->string('email', 191)->default('email@workgroup.com');
            $table->integer('telephone')->default(102030405);
            $table->string('destination', 191)->default('DESTINATION');
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
        Schema::dropIfExists('reservations');
    }
};
