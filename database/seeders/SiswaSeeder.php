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
            'userID' => 5,
            'nisn' => '0054587451',
            'nis' => '11459',
            'nama_lengkap' => 'Angel Calista',
            'nama_panggilan' => 'Angel',
            'tmp_lahir' => 'Jakarta',
            'tgl_lahir' => '2022-08-29',
            'jns_kelamin' => 'P',
            'gol_darah' => 'B',
            'anak_ke' => '2',
            'tggl_bersama' => 'Orang Tua',
            'alamat' => 'Jl. Bekasi Timur Raya no 444',
            'no_telp' => '081281256740',
            'email' => 'angel@gmail.com',
            'disabilitas' => 'Tidak'
        ]);

        siswa::create([
            'kelasID' => 1,
            'userID' => 6,
            'nisn' => '0058527251',
            'nis' => '11465',
            'nama_lengkap' => 'Musthafa Hanif',
            'nama_panggilan' => 'Musthafa',
            'tmp_lahir' => 'Jakarta',
            'tgl_lahir' => '2022-09-14',
            'jns_kelamin' => 'L',
            'gol_darah' => 'B',
            'anak_ke' => '2',
            'tggl_bersama' => 'Orang Tua',
            'alamat' => 'Jl. Bekasi Timur Raya no 84',
            'no_telp' => '08587134282',
            'email' => 'musthafa@gmail.com',
            'disabilitas' => 'Tidak'
        ]);
    }
}
