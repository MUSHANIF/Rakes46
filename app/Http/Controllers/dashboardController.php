<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\pertanyaan;
use App\Models\kelas;
use Auth;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index() {

        return view('superadmin.home',[
            'user' => User::where('level','=', '1')->count(),
            'siswa' => kelas::with([
                'guru','siswa'
           ]) ->join('siswas', 'siswas.kelasID', '=', 'kelas.id')
           
           ->where('kelas.userID' ,  Auth::user()->id )->count(),
            'puskesmas' => User::where('level','=', '3')->count(),
            'kepala' => User::where('level','=', '4')->count(),
            'wali' => User::where('level','=', '2')->count(),

            'superadmin' => User::where('level','=', '5')->count(),
            'pertanyaan' => pertanyaan::all()->count(),
        ]);

    }
}
