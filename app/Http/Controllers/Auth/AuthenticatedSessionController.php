<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();
        $data =  DB::table('kelas')->where('kelas.userID' ,  auth()->user()->id )->get();

        $request->session()->regenerate();
        if (auth()->user()->level == 5) {
            toastr()->success('Salam sehat!', 'Selamat datang superadmin!');
            return redirect('/dashboard');
        }
        if (auth()->user()->level == 4) {
            toastr()->success('Salam sehat!', 'Selamat datang kepala sekolah!');
            return redirect('/dashboardkepala');
        }
        if (auth()->user()->level == 3) {
            toastr()->success('Salam sehat!', 'Selamat datang Puskesmas!');
            return redirect('/dashboardpuskesmas');
        }
        if (auth()->user()->level == 2) {
            if($data->isEmpty()){
               
                toastr()->success('Salam sehat!', 'Selamat datang wali kelas!');
                return redirect('/siswawali');
            }else{
                toastr()->success('Salam sehat!', 'Selamat datang wali kelas!');
                return redirect('/dashboardwali');
            }
          
        }
        toastr()->success('Salam sehat!', 'Selamat datang siswa!');
        return redirect('/siswaid');
       
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
