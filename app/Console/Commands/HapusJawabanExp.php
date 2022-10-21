<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\jawaban;
use Illuminate\Console\Command;

class HapusJawabanExp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hapus:jawaban';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Menghapus Jawaban Expired';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $tanggalAwal = Carbon::today()->startOfCentury();
        $tanggalAkhir = Carbon::today()->subYear(2)->lastOfYear();

        jawaban::whereCustomTanggal([$tanggalAwal, $tanggalAkhir])->each(function (jawaban $jawaban) {
            $jawaban->delete();
        });

        $this->info("Data has been deleted.");

        // if ($this->confirm('Are you sure you want to delete the data ? ')) {
        //     jawaban::whereCustomTanggal([$tanggalAwal, $tanggalAkhir])->each(function (jawaban $jawaban) {
        //         $jawaban->delete();
        //     });

        //     $this->info("Data has been deleted.");
        // }

        return 0;
    }
}
