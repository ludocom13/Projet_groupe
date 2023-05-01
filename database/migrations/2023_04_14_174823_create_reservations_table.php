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
            $table->string('ref')->default('REFERENCE');
            $table->string('nomV')->default('NOM VOYAGEUR');
            $table->string('prenom')->default('PRENOM VOYAGEUR');
            $table->string('email')->default('email@workgroup.com');
            $table->integer('telephone')->default(102030405);
            $table->string('destination')->default('DESTINATION');
            $table->dateTime('datEdite');
            $table->char('statut')->default('ACTIF');
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
