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
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('login')->default('IDENTIFIANT');
            $table->string('nom')->default('NOM UTILISATEUR');
            $table->string('prenom')->default('PRENOM UTILISATEUR');
            $table->string('email')->default('exemple@workgroup.com');
            $table->integer('telephone')->default(102030405);
            $table->string('password')->default('Nimportequoi1259875pourfinir35677idiot9875enfin');
            $table->text('description')->nullable();
            $table->string('categorie')->default('CATEGORIE');
            $table->string('domaine')->default('DOMAINE');
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
        Schema::dropIfExists('utilisateurs');
    }
};
