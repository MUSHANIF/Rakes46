<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index() {
        return view('dashboard',[
            'user' => User::where('level','=', '1')->count(),
            'superadmin' => User::where('level','=', '5')->count(),
        ]);
    }
}
