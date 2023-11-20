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
        Schema::create('moto_est_gamme', function (Blueprint $table) {
            $table->foreignId('idmoto')->constrained(table:'motos_configurables', column:'idmoto');
            $table->foreignId('idgammemoto')->constrained(table:'gammes_moto');
            $table->primary('idmoto', 'idgammemoto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('moto_est_gamme');
    }
};
