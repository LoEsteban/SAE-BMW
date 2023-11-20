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
        Schema::create('couleurs_possibles', function (Blueprint $table) {
            $table->foreignId('idmoto')->constrained(table:'motos_configurables', column:'idmoto');
            $table->foreignId('idcouleur')->constrained(table:'couleurs', column:'idcouleur');
            $table->primary('idmoto', 'idcouleur');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('couleurs_possibles');
    }
};
