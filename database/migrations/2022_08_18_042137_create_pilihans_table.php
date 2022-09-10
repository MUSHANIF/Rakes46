<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePilihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pilihans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_pertanyaan');
            $table->string('pilihan');
            $table->timestamps();

            $table->foreign('id_pertanyaan')->references('id')->on('pertanyaans') ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pilihans');
    }
}
