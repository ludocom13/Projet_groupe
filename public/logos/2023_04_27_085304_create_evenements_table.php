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
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('lieu');
            $table->text('description');
            $table->timestamp('date');
            $table->integer('comments');
            $table->integer('notes');
            $table->integer('participants');
            $table->string('statut');
            $table->timestamp('datEdite');
            $table->timestamp('dateMaj');
            $table->integer('agent');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evenements');
    }
};
