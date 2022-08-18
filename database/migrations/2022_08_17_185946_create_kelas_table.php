<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nisn');
            $table->string('thn_ajaran');
            $table->string('kelas');
            $table->enum('jurusan', ['AKL 1', 'AKL 2', 'BDP 1', 'BDP 2', 'OTKP 1', 'OTKP 2', 'DKV', 'RPL']);
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
        Schema::dropIfExists('kelas');
    }
}
