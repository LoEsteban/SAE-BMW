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
        Schema::create('packs_possibles', function (Blueprint $table) {
            $table->foreignId('idmoto')->constrained(table:'motos_configurables');
            $table->foreignId('idequipementmoto')->constrained(table:'equipements_moto');
            $table->primary('idmoto', 'idequipementmoto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packs_possibles');
    }
};