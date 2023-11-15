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
        Schema::create('compte_clients', function (Blueprint $table) {
            $table->id();

            $table->foreignId("langue");
            $table->foreignId("concessionnaire");
            $table->foreignId("infospersos");

            $table->string("prenomclient");
            $table->string("nomclient");
            $table->string("civilite");
            $table->timestamps("datenaissance");
            $table->string("photoprofil");
            $table->boolean("communicationsmarketting");
            $table->boolean("offrespersonnalisees");
            $table->boolean("keepmeinformed");
            $table->string("emailclient");
            $table->string("motdepasseclient");
            $table->boolean("estactive");
            $table->string("typecompte");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compte_clients');
    }
};
