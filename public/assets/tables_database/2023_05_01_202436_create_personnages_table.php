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
        Schema::create('personnages', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('nom', 191)->default('NOM PERSONNAGE');
            $table->string('specialites', 191)->default('ARCHER');
            $table->unsignedInteger('magie')->default(0);
            $table->unsignedInteger('force')->default(0);
            $table->unsignedInteger('agilite')->default(0);
            $table->unsignedInteger('intelligeance')->default(0);
            $table->unsignedInteger('pv')->default(0);
            $table->unsignedInteger('userID')->index()->default(0);
            $table->unsignedInteger('groupID')->index()->default(0);
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
        Schema::dropIfExists('personnages');
    }
};
