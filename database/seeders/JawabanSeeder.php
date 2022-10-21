<?php

namespace Database\Seeders;

use App\Models\jawaban;
use Illuminate\Database\Seeder;

class JawabanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->jawabanLama();
        $this->jawabanBaru();
    }

    public function jawabanBaru()
    {
        for ($i = 1; $i <= 35; $i++) {
            jawaban::create([
                'userID' => 10,
                'pertanyaanID' => $i,
                'jawaban' => 'true',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        for ($i = 36; $i <= 41; $i++) {
            jawaban::create([
                'userID' => 10,
                'pertanyaanID' => $i,
                'jawaban' => '200',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    public function jawabanLama()
    {
        for ($i = 1; $i <= 35; $i++) {
            jawaban::create([
                'userID' => 10,
                'pertanyaanID' => $i,
                'jawaban' => 'false',
                'created_at' => now()->subYear(1),
                'updated_at' => now()->subYear(1),
            ]);
        }

        for ($i = 36; $i <= 41; $i++) {
            jawaban::create([
                'userID' => 10,
                'pertanyaanID' => $i,
                'jawaban' => '100',
                'created_at' => now()->subYear(1),
                'updated_at' => now()->subYear(1),
            ]);
        }
    }
}
