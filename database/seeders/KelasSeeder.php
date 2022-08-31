<?php

namespace Database\Seeders;

use App\Models\kela;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        kela::create([
            'userID' => 4,
            'nip' => 4561261,
            'nama_guru' => 'Guru',
            'thn_ajaran' => '2022',
            'kelas' => '11  ',
            'jurusan' => 'RPL',
        ]);
    }
}
