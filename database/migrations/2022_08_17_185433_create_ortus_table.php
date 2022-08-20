<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrtusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ortus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nisn');
            $table->string('nama_ayah');
            $table->string('tmplahir_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('alamat_ayah');
            $table->string('nama_ibu');
            $table->string('tmplahir_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('alamat_ibu');
            $table->timestamps();
            $table->foreign('nisn')->references('nisn')->on('siswas');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ortus');
    }
}
