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
            PertanyaanSeeder::class,
        ]);
    }
}
