<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\kela;
use App\Models\ortu;
use App\Models\User;
use App\Models\siswa;
use App\Models\jawaban;
use App\Models\pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class daftarsiswawaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cari = $request->cari;

        $kelas = kela::where('userID', Auth::user()->id)->first();
        $kelasguru = kela::all();


        $datas = kela::where('userID', Auth::user()->id)->with(['guru', 'siswa', 'user'])->whereRelation('siswa', 'nama_lengkap', 'like', "%" . $cari . "%")->first();

        return view('siswa.index', compact('kelas', 'datas', 'kelasguru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validasi = Validator::make($data, [
            'nip' => 'required|max:10|unique:kelas',
            'nama_guru' => 'required|max:50',
            'thn_ajaran' => 'required|max:4',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);
        if ($validasi->fails()) {
            return back()->withInput()->withErrors($validasi);
        }

        if (kela::whereNot('userID', $request->userid)) {
            toastr()->info('Anda bukan guru yang terdaftar! tolong infokan ke kepala sekolah', 'Gagal daftar');
            return redirect()->back();
        }
        $kelas = kela::firstWhere('userID', $request->userid);
        $kelas->userID = $request->userid;
        $kelas->nip = $request->nip;
        $kelas->nama_guru = $request->nama_guru;
        $kelas->thn_ajaran = $request->thn_ajaran;
        $kelas->kelas = $request->kelas;
        $kelas->jurusan = $request->jurusan;

        $kelas->save();
        toastr()->success('Berhasil di tambah!', 'Selamat');
        return redirect('siswawali');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $data =  kela::where('userID',  Auth::user()->id)->first();
        $jawabans = jawaban::where('userID', $id)->whereTahunIni()->get();
        $siswa =  siswa::where('userID', $id)->first();
        $ortu =  ortu::where('userID',  $id)->first();

        $persentasi = round(($jawabans->count() / pertanyaan::count()) * 100);
        return view('siswa.detail', compact('jawabans', 'data', 'siswa', 'ortu', 'persentasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = User::find($id);
        return view('superadmin.siswa.ubah', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = User::find($id);

        $model->name = $request->name;
        $model->email = $request->email;
        $model->level = $request->opsi;

        $model->save();
        toastr()->success('Berhasil di terupdate!', 'Sukses');
        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        toastr()->info('Berhasil di hapus!', 'Sukses');
        return redirect('siswa');
    }
}
