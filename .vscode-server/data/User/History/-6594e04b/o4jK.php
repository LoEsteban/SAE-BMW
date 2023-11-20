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
        Schema::create('equipements_moto', function (Blueprint $table) {
            $table->id('idequipementmoto');
            $table->string('nompack', 100)->nullable(false);
            $table->text('detailspack')->default('super equipement');
            $table->float('prixpack')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipement_moto');
    }
};
