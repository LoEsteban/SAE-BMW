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
            $table->string('nomcouleur', 100)->nullable(false);
            $table->text('desccouleur')->default('superbe couleur');
            $table->float('prixcouleur')->default(0);
            $table->string('photocouleur', 100);

            $table->timestamps();
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
