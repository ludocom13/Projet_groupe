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
            $table->string('ref')->default('REFERENCE');
            $table->unsignedInteger('userID')->index();
            $table->unsignedInteger('prix')->default(0);
            $table->string('nom')->default('NOM BENEFICIAIRE');
            $table->string('prenom')->default('PRENOM BENEFICIAIRE');
            $table->string('nomAgent')->default('NOM AGENT EDITEUR');
            $table->string('prenomAgent')->default('PRENOM AGENT EDITEUR');
            $table->unsignedInteger('agentID')->default(0);
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
        Schema::dropIfExists('cadeaux');
    }
};
