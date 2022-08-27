<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kelasID');
            $table->unsignedBigInteger('userID');
            $table->string('nisn');
            $table->char('nis');
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->enum('jns_kelamin', ['P', 'L']);
            $table->char('gol_darah');
            $table->string('anak_ke');
            $table->enum('tggl_bersama', ['Orang Tua', 'Wali']);
            $table->string('alamat');
            $table->char('no_telp', 12);
            $table->string('email')->unique();
            $table->enum('disabilitas', ['Tidak', 'Netra', 'Rungu', 'Rungu Wicara', 'Grahita', 'Daksa', 'Autisme', 'Ganda', 'ADHD']);
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
        Schema::dropIfExists('siswas');
    }
}
