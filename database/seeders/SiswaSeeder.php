<?php

namespace Database\Seeders;

use App\Models\siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        siswa::create([
            'kelasID' => 1,
            'userID' => 2,
            'nisn' => 4587451,
            'nis' => '11459',
            'nama_lengkap' => 'Angel Calista',
            'nama_panggilan' => 'Angel',
            'tmp_lahir' => 'Jakarta',
            'tgl_lahir' => '2022-08-29',
            'jns_kelamin' => 'P',
            'gol_darah' => 'B',
            'anak_ke' => '2',
            'tggl_bersama' => 'Orang Tua',
            'alamat' => 'jl. bekasi timur raya no 444',
            'no_telp' => '081281256740',
            'email' => 'angel@gmail.com',
            'disabilitas' => 'Tidak'
        ]);

        siswa::create([
            'kelasID' => 1,
            'userID' => 3,
            'nisn' => 4586121,
            'nis' => '11465',
            'nama_lengkap' => 'Musthafa Hanif',
            'nama_panggilan' => 'Musthafa',
            'tmp_lahir' => 'Jakarta',
            'tgl_lahir' => '2022-09-14',
            'jns_kelamin' => 'L',
            'gol_darah' => 'B',
            'anak_ke' => '2',
            'tggl_bersama' => 'Orang Tua',
            'alamat' => 'jl. bekasi timur raya no 444',
            'no_telp' => '08587134282',
            'email' => 'musthafa@gmail.com',
            'disabilitas' => 'Tidak'
        ]);
    }
}
