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
        Schema::create('equipements_possibles_moto', function (Blueprint $table) {
            $table->foreignId('idmoto')->constrained(table:'categories_caracteristique');
            $table->foreignId('idequipementmoto')->constrained(table:'categories_caracteristique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipements_possibles_moto');
    }
};
