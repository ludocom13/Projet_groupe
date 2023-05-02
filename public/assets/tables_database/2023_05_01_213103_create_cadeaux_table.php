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
        Schema::create('cadeaux', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('ref', 191)->default('REFERENCE');
            $table->unsignedInteger('userID')->index();
            $table->unsignedInteger('prix')->default(0);
            $table->string('nom', 191)->default('NOM BENEFICIAIRE');
            $table->string('prenom', 191)->default('PRENOM BENEFICIAIRE');
            $table->string('nomAgent', 191)->default('NOM AGENT EDITEUR');
            $table->string('prenomAgent', 191)->default('PRENOM AGENT EDITEUR');
            $table->unsignedInteger('agentID')->default(0);
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
        Schema::dropIfExists('cadeaux');
    }
};
