<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->integer('nip');
            $table->unsignedBigInteger('userID');
            $table->unsignedBigInteger('kelasID');
            $table->string('nama');
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->enum('jns_kelamin', ['P', 'L']);
            $table->timestamps();
            
            $table->foreign('kelasID')->references('id')->on('kelas');
            $table->foreign('userID')->references('id')->on('users');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gurus');
    }
}
