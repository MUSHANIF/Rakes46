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
            $table->foreignId('kelasID')->nullable()->references('id')->on('kelas')->onDelete('set null');
            $table->unsignedBigInteger('userID');
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
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
            $table->char('no_telp', 13);
            $table->string('email')->unique();
            $table->enum('disabilitas', ['Tidak', 'Netra', 'Rungu', 'Rungu Wicara', 'Grahita', 'Daksa', 'Autisme', 'Ganda', 'ADHD']);
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
        Schema::dropIfExists('siswas');
    }
}
