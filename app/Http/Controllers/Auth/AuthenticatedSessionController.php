<?php

namespace App\Http\Controllers\Auth;

use App\Models\kela;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;

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
        // $data =  DB::table('kelas')->where('kelas.userID',  auth()->user()->id)->first();
        $data = kela::where('kelas.userID',  auth()->user()->id)->where([
            ['nip', '!=', null],
            ['nama_guru', '!=', null],
            ['thn_ajaran', '!=', null],
        ])->first();

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
            toastr()->success('Salam sehat!', 'Selamat datang wali kelas!');

            if (empty($data)) {
                return redirect('/siswawali');
            }

            return redirect('/dashboardwali');
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
