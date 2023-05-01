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
        Schema::create('ateliers', function (Blueprint $table) {
            $table->id();
            $table->string('sujet')->nullable()->default(null);
            $table->string('domaine')->default('BACK-END');
            $table->unsignedBigInteger('user_id');
            $table->string('nom')->default('atelier_1');
            $table->longText('description');
            $table->char('statut')->default('EN COURS');
            $table->timestamp('datEdite');
            $table->timestamp('dateMaj');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ateliers');
    }
};
