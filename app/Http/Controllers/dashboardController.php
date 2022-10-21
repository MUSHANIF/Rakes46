<?php

namespace App\Http\Controllers;

use App\Models\kela;
use App\Models\siswa;
use App\Models\User;
use App\Models\pertanyaan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'siswa' => User::where('level', '=', '1')->count(),
            'siswaGuru' => siswa::with('kela')->whereRelation('kela', 'userID', Auth::user()->id)->count(),
            'puskesmas' => User::where('level', '=', '3')->count(),
            'kepala' => User::where('level', '=', '4')->count(),
            'wali' => User::where('level', '=', '2')->count(),
            'superadmin' => User::where('level', '=', '5')->count(),
            'pertanyaan' => pertanyaan::all()->count(),
        ]);
    }
}
