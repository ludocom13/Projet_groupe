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
        Schema::create('groupes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom', 191);
            $table->text('description')->nullable();
            $table->unsignedInteger('nb_place')->nullable()->default(0);
            $table->unsignedInteger('place_prise')->nullable()->default(0);
            $table->unsignedInteger('userID')->index();
            $table->dateTime('datEdite');
            $table->char('statut', 191)->default('EN COURS');
            $table->dateTime('dateMaj');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groupes');
    }
};
