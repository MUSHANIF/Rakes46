<?php

namespace Database\Seeders;

use App\Models\ortu;
use App\Models\pertanyaan;
use App\Models\siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            KelasSeeder::class,
            SiswaSeeder::class,
            PertanyaanSeeder::class,
        ]);

        ortu::create([
            'userID' => 2,
            'nama_ayah' => 'abidun',
            'tmplahir_ayah' => 'bekasi',
            'pekerjaan_ayah' => 'wirausaha',
            'alamat_ayah' => 'jl bekasi raya',
            'nama_ibu' => 'siti halimah',
            'tmplahir_ibu' => 'kebumen',
            'pekerjaan_ibu' => 'ibu rumah tangga',
            'alamat_ibu' => 'jl bekasi raya'
        ]);
    }
}
