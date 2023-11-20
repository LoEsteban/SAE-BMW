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
        Schema::create('caracteristiques_moto', function (Blueprint $table) {
            $table->id('idCaracteristique');
            $table->foreignId('idcategorie')->constrained(table:'categories_caracteristique');
            $table->string('nomcaracteristique', 60)->nullable(false);
            $table->float('valeurCaracteristique')->default(0);
            $table->string('unitemesure', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caracteristiques_moto');
    }
};
