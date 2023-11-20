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
        Schema::create('equipements_possibles_moto', function (Blueprint $table) {
            $table->id('idcategorie');
            $table->string('nomcategorie', 60)->nullable(false);            $table->id('idcategorie');
            $table->string('nomcategorie', 60)->nullable(false);z
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipements_possibles_moto');
    }
};
