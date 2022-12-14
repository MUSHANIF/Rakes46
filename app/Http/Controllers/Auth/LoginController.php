<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    protected function redirectTo()
    {
        if (auth()->user()->level == 5) {
            toastr()->success('Salam sehat!', 'Selamat datang superadmin!');
            return '/superadmin';
        }
        if (auth()->user()->level == 4) {
            toastr()->success('Salam sehat!', 'Selamat datang kepala sekolah!');
            return '/kepala';
        }
        if (auth()->user()->level == 4) {
            toastr()->success('Salam sehat!', 'Selamat datang puskesmas!');
            return '/puskesmas';
        }
        toastr()->success('Salam sehat!', 'Selamat datang superadmin!');
        // return '/home1';
        return '/siswaid';
        
    }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
