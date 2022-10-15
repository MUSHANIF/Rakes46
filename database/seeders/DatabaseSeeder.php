<?php

namespace Database\Seeders;

use App\Models\ortu;
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
            'userID' => 10,
            'nama_ayah' => 'Abidun',
            'tmplahir_ayah' => 'Bekasi',
            'pekerjaan_ayah' => 'Wirausaha',
            'alamat_ayah' => 'Jl. Bekasi Raya',
            'nama_ibu' => 'Siti Halimah',
            'tmplahir_ibu' => 'Kebumen',
            'pekerjaan_ibu' => 'Ibu Rumah Tangga',
            'alamat_ibu' => 'Jl. Bekasi Raya'
        ]);
    }
}
