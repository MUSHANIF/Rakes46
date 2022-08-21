<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('walis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswaID');
            $table->string('nama_wali');
            $table->string('tmplahir_wali');
            $table->string('pekerjaan_wali');
            $table->string('alamat_wali');
            $table->timestamps();
            $table->foreign('siswaID')->references('id')->on('siswas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('walis');
    }
}
