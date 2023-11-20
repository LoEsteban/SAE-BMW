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
        Schema::create('motos_configurables', function (Blueprint $table) {
            $table->id('idmoto');
            $table->string('nomMoto', 60)->nullable(false);
            $table->float('prixMoto')->nullable(false);
            $table->text('descriptionmoto')->default('superbe moto');
            $table->string('brochurePDF', 80)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motos_configurables');
    }
};
