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
        Schema::create('ancheres', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('ref', 191)->default('REFERENCE');
            $table->unsignedInteger('userID')->index();
            $table->unsignedInteger('annonceID')->index();
            $table->integer('prix')->default(0);
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
        Schema::dropIfExists('ancheres');
    }
};
