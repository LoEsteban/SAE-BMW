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
        Schema::create('photos_moto_configurable', function (Blueprint $table) {
            $table->foreignId('idmoto')->constrained(table:'motos_configurables', column:'idmoto');
            $table->foreignId('idphoto')->constrained(table:'photos');
            $table->primary('idmoto', 'idphoto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos_moto_configurable');
    }
};
