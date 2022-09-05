<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\pertanyaan;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Pertanyaan A
        pertanyaan::create([
            'type' => 1,
            'group' => 'a',
            'no' => '1',
            'pertanyaan' => 'Alergi'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'a',
            'no' => '2',
            'pertanyaan' => 'Pernah Mengalami cedera'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'a',
            'no' => '3',
            'pertanyaan' => 'Riwayat kejang berulang'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'a',
            'no' => '4',
            'pertanyaan' => 'Riwayat pingsan'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'a',
            'no' => '5',
            'pertanyaan' => 'Riwayat transfusi darah berulang'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'a',
            'no' => '6',
            'pertanyaan' => 'Riwayat kelainan bawaan yang dimiliki'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'a',
            'no' => '7',
            'pertanyaan' => 'Riwayat penyakit lainnya'
        ]);

        // Pertanyaan B
        pertanyaan::create([
            'type' => 1,
            'group' => 'b',
            'no' => '1',
            'pertanyaan' => 'Memiliki Catatan Imunisasi'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'b',
            'no' => '2',
            'pertanyaan' => 'Saat Bayi Mendapat Imunisasi'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'b',
            'no' => '3',
            'pertanyaan' => 'Saat SD Kelas 1 Mendapat Imunisasi'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'b',
            'no' => '4',
            'pertanyaan' => 'Saat SD Kelas 2 Mendapat Imunisasi'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'b',
            'no' => '5',
            'pertanyaan' => 'Saat SD Kelas 5 Mendapat Imunisasi'
        ]);

        // Pertanyaan C
        pertanyaan::create([
            'type' => 1,
            'group' => 'c',
            'no' => '1',
            'pertanyaan' => 'Apakah Orang Tuamu atau Keluarga lain menderita'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'c',
            'no' => '2',
            'pertanyaan' => 'Tuberkulosis (TBC)'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'c',
            'no' => '3',
            'pertanyaan' => 'Diabetes Meilitus'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'c',
            'no' => '4',
            'pertanyaan' => 'Hepatitis/Sakit Kuning'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'c',
            'no' => '5',
            'pertanyaan' => 'Asma/Bengek'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'c',
            'no' => '6',
            'pertanyaan' => 'Penyakit lainnya'
        ]);

        // Pertanyaan D
        pertanyaan::create([
            'type' => 1,
            'group' => 'd',
            'no' => '1',
            'pertanyaan' => 'Sarapan'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'd',
            'no' => '2',
            'pertanyaan' => 'Jajan'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'd',
            'no' => '3',
            'pertanyaan' => 'Resiko Merokok?'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'd',
            'no' => '4',
            'pertanyaan' => 'Resiko Minum-minuman Beralkohol dan Napza'
        ]);

        // Pertanyaan E
        pertanyaan::create([
            'type' => 1,
            'group' => 'e',
            'no' => '1',
            'pertanyaan' => 'Masalah Pubertas'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'e',
            'no' => '2',
            'pertanyaan' => 'Resiko IMS'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'e',
            'no' => '3',
            'pertanyaan' => 'Resiko Kekerasan Seksual'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'e',
            'no' => '4',
            'pertanyaan' => 'Gangguang Menstruasi'
        ]);

        // Pertanyaan F
        pertanyaan::create([
            'type' => 1,
            'group' => 'f',
            'no' => '1',
            'pertanyaan' => 'Gejala emosional (E)'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'f',
            'no' => '2',
            'pertanyaan' => 'Masalah Perilaku (C)'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'f',
            'no' => '3',
            'pertanyaan' => 'Hiperaktifitas (H)'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'f',
            'no' => '4',
            'pertanyaan' => 'Masalah teman sebaya (P)'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'f',
            'no' => '5',
            'pertanyaan' => 'Perilaku Prososial (Pr)'
        ]);

        // Pertanyaan G
        pertanyaan::create([
            'type' => 1,
            'group' => 'g',
            'no' => '1',
            'pertanyaan' => 'Visual'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'g',
            'no' => '2',
            'pertanyaan' => 'Audio'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'g',
            'no' => '3',
            'pertanyaan' => 'Kinestatik'
        ]);

        pertanyaan::create([
            'type' => 1,
            'group' => 'g',
            'no' => '4',
            'pertanyaan' => 'Dominasi otak'
        ]);

        // Pertanyaan G
        pertanyaan::create([
            'type' => 2,
            'group' => 'a',
            'no' => '1',
            'pertanyaan' => 'Tekanan Darah'
        ]);

        pertanyaan::create([
            'type' => 2,
            'group' => 'a',
            'no' => '2',
            'pertanyaan' => 'Denyut Nadi'
        ]);

        pertanyaan::create([
            'type' => 2,
            'group' => 'a',
            'no' => '3',
            'pertanyaan' => 'Frekuensi Pernapasan'
        ]);

        pertanyaan::create([
            'type' => 2,
            'group' => 'a',
            'no' => '4',
            'pertanyaan' => 'Suhu'
        ]);

        pertanyaan::create([
            'type' => 2,
            'group' => 'a',
            'no' => '5',
            'pertanyaan' => 'Bising Jantung'
        ]);

        pertanyaan::create([
            'type' => 2,
            'group' => 'a',
            'no' => '6',
            'pertanyaan' => 'Bising Paru'
        ]);
    }
}
