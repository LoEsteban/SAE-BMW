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
            $table->foreignId('idpack')->constrained(table:'packs');
            $table->primary('idmoto', 'idpack');
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
