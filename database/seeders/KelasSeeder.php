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
            'kelas' => '10',
            'jurusan' => 'RPL',
        ]);

        kela::create([
            'userID' => 5,
            'kelas' => '11',
            'jurusan' => 'RPL',
        ]);

        kela::create([
            'userID' => 6,
            'kelas' => '12',
            'jurusan' => 'RPL',
        ]);

        kela::create([
            'userID' => 7,
            'kelas' => '10',
            'jurusan' => 'DKV',
        ]);

        kela::create([
            'userID' => 8,
            'kelas' => '11',
            'jurusan' => 'DKV',
        ]);

        kela::create([
            'userID' => 9,
            'kelas' => '12',
            'jurusan' => 'DKV',
        ]);
    }
}
