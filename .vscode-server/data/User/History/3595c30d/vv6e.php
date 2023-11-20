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
        Schema::create('moto_configurables', function (Blueprint $table) {
            $table->id('idmoto');
            $table->string('nomMoto', 60);
            $table->float('prixMoto');
            $table->text('descriptionmoto')->default('superbe moto');
            $table->string('brochurePDF', 80);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('moto_configurables');
    }
};
