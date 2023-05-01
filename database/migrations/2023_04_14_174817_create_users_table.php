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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->char('prenom')->nullable()->default('PRENOM');
            $table->string('email')->unique();
            $table->integer('telephone')->unique()->nullable()->default(102030405);
            $table->text('email_verif')->nullable()->default(null);
            $table->string('password');
            $table->string('cle_token')->nullable()->default(null);
            $table->char('etat')->default('EN COURS');
            $table->char('statut')->default('ACTIF');
            $table->char('qualite')->default('PARTICULIER');
            $table->timestamp('datEdite');
            $table->timestamp('dateMaj')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
