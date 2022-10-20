<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]);
        }

        for ($i = 36; $i <= 41; $i++) {
            jawaban::create([
                'userID' => 10,
                'pertanyaanID' => $i,
                'jawaban' => '200',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
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
                'created_at' => Carbon::now()->subYear(1)->toDateTimeString(),
                'updated_at' => Carbon::now()->subYear(1)->toDateTimeString(),
            ]);
        }

        for ($i = 36; $i <= 41; $i++) {
            jawaban::create([
                'userID' => 10,
                'pertanyaanID' => $i,
                'jawaban' => '100',
                'created_at' => Carbon::now()->subYear(1)->toDateTimeString(),
                'updated_at' => Carbon::now()->subYear(1)->toDateTimeString(),
            ]);
        }
    }
}
