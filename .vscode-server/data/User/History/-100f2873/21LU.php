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

            $table->id("langue");
            $table->id("concessionnaire");
            $table->id("infospersos");

            $table->string("prenomclient");
            $table->string("nomclient");
            $table->string("civilite");
            $table->date("datenaissance");
            $table->string("photoprofil");
            $table->bool("communicationsmarketting");
            $table->bool("offrespersonnalisees");
            $table->bool("keepmeinformed");
            $table->string("emailclient");
            $table->string("motdepasseclient");
            $table->bool("estactive");
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
