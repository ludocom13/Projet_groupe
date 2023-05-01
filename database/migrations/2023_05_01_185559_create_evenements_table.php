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
            $table->string('titre', 191);
            $table->string('lieu', 191);
            $table->text('description');
            $table->timestamp('date');
            $table->integer('comments');
            $table->integer('notes');
            $table->integer('participants');
            $table->string('public', 11)->nullable()->default('TOUT PUBLIC');
            $table->bigInteger('click')->nullable()->default(null);
            $table->string('statut', 191);
            $table->timestamp('datEdite');
            $table->timestamp('dateMaj');
            $table->integer('agent');
            $table->text('link_img')->nullable();
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
