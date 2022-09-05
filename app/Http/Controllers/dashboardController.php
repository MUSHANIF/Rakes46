<?php

namespace App\Http\Controllers;

use App\Models\kela;
use App\Models\User;
use App\Models\pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index()
    {

       


        return view('dashboard',   
        [
            "title" => "Dashboard"
        ],
        [
            'user' => User::where('level','=', '1')->count(),
            'siswa' => kela::with([
                'guru','siswa'
           ]) ->join('siswas', 'siswas.kelasID', '=', 'kelas.id')
           
           ->where('kelas.userID' ,  Auth::user()->id )->count(),
            'puskesmas' => User::where('level','=', '3')->count(),
            'kepala' => User::where('level','=', '4')->count(),
            'wali' => User::where('level','=', '2')->count(),
            'data' => DB::table('siswas')->where('siswas.userID' ,  Auth::user()->id )->get(),
            'superadmin' => User::where('level','=', '5')->count(),
            'pertanyaan' => pertanyaan::all()->count(),
        ],
      
    );


        
    }
}
