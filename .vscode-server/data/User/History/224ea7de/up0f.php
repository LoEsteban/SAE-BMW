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
        Schema::create('couleur_styles_possibles', function (Blueprint $table) {
            $table->foreignId('idcouleur')->constrained(table:'couleurs', column:'idcouleur');
            $table->foreignId('idstyle')->constrained(table:'styles', column:'idstyle');
            $table->primary('idcouleur', 'idstyle');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('couleur_styles_possibles');
    }
};
