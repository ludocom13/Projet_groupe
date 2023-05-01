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
            $table->string('nom', 191);
            $table->char('prenom', 191)->nullable()->default('PRENOM');
            $table->string('email', 191)->unique();
            $table->integer('telephone')->unique()->nullable()->default(102030405);
            $table->text('email_verif')->nullable();
            $table->string('password', 191);
            $table->string('cle_token', 191)->nullable()->default(null);
            $table->char('etat', 191)->default('EN COURS');
            $table->char('statut', 191)->default('ACTIF');
            $table->char('qualite', 30)->default('PARTICULIER');
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
