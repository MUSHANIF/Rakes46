<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index() {

        return view('dashboard',[
            'user' => User::where('level','=', '1')->count(),
            'puskesmas' => User::where('level','=', '4')->count(),
            'kepala' => User::where('level','=', '4')->count(),
            'wali' => User::where('level','=', '3')->count(),
            'orangtua' => User::where('level','=', '2')->count(),
            'superadmin' => User::where('level','=', '5')->count(),
           
        ]);

    }
}
