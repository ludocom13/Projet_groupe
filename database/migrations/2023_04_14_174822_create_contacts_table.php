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
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('nom')->default('NOM DU DEMANDEUR');
            $table->string('prenom')->default('PRENOM DU DEMANDEUR');
            $table->string('email')->default('exemple@workgroup.com');
            $table->integer('telephone')->default(102030405);
            $table->unsignedInteger('userID')->index();
            $table->text('message');
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
        Schema::dropIfExists('contacts');
    }
};
