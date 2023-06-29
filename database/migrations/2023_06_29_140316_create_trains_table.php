<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("azienda",100)->nullable();
            $table->string("stazione_partenza",100)->nullable();
            $table->string("stazione_arrivo",100)->nullable();
            $table->time("orario_partenza")->nullable();
            $table->time("orario_arrivo")->nullable();
            $table->integer("codice_treno")->nullable();
            $table->boolean("in_orario")->nullable();
            $table->boolean("cancellato")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
