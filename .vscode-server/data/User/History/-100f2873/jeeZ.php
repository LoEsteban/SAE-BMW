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
            $table->id("idcompte");

            $table->foreignId("langue")->constrained('users')->onDelete('cascade');
            $table->foreignId("concessionnaire")->nullable()->constrained('users')->onDelete('cascade');;
            $table->foreignId("infospersos")->constrained('users')->onDelete('cascade');;

            $table->string("prenomclient");
            $table->string("nomclient");
            $table->string("civilite");
            $table->timestamp("datenaissance");
            $table->string("photoprofil")->nullable();
            $table->boolean("communicationsmarketting")->nullable();
            $table->boolean("offrespersonnalisees")->nullable();
            $table->boolean("keepmeinformed")->nullable();
            $table->string("emailclient")->nullable();
            $table->string("motdepasseclient");
            $table->boolean("estactive")->nullable();
            $table->string("typecompte")->nullable();

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
