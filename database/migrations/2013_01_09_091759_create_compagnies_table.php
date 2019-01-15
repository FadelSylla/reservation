<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompagniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compagnies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom', 30);
            $table->string('description');
            $table->string('telephone', 20);
            $table->string('adresse', 50);
            $table->string('email', 100);
            $table->string('wifi', 3);
            $table->string('climatisation', 3);
            $table->string('num_compte_bancaire', 50);
            $table->string('momo', 12);
            $table->string('flooz', 12);
            $table->time('validiterReserv');
            $table->integer('penaliter');
            $table->time('durPostPenaliter');
            $table->string('msgAverti');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compagnies');
    }
}