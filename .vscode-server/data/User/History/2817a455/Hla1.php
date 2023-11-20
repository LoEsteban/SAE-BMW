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
        Schema::create('couleurs', function (Blueprint $table) {
            $table->id('idcouleur');
            $table->string('nomequipementmoto', 100)->nullable(false);
            $table->text('descequipementmoto')->default('superbe e');
            $table->float('prixequipementmoto')->default(0);
            $table->string('photoequipementmoto', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('couleurs');
    }
};
