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
        Schema::create('categories_equipement_moto', function (Blueprint $table) {
            $table->id('idcategorieequipementmoto');
            $table->string('nomcategorieequipementmoto', 60)->nullable(false);    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories_equipement_moto');
    }
};
