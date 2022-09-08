<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\kela;
use App\Models\User;
use App\Models\jawaban;
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
        $datas = kela::with([
            'guru', 'siswa','user'
        ])->join('siswas', 'siswas.kelasID', '=', 'kelas.id')

            ->where('kelas.userID',  Auth::user()->id)
            ->where('nama_lengkap', 'like', "%" . $cari . "%")


            ->get();
        $data =  DB::table('kelas')->where('kelas.userID',  Auth::user()->id)->get();
        return view(
            'siswa.index',
            compact('datas', 'data'),
            [
                "title" => "List Siswa"
            ]
        );
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
        $kelas = new kela;
        $kelas->userID = $request->userid;
        $kelas->nip = $request->nip;
        $kelas->nama_guru = $request->nama_guru;
        $kelas->thn_ajaran = $request->thn_ajaran;
        $kelas->kelas = $request->kelas;
        $kelas->jurusan = $request->jurusan;


        $validasi = Validator::make($data, [
            'nip' => 'required|max:10|unique:kelas',
            'nama_guru' => 'required|max:40',
            'thn_ajaran' => 'required|max:4',
            'kelas' => 'required',
            'jurusan' => 'required',

        ]);
        if ($validasi->fails()) {
            return redirect()->route('siswawali.index')->withInput()->withErrors($validasi);
        }

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
    public function show(Request $request , $id)
    {
         $data =  DB::table('kelas')->where('kelas.userID',  Auth::user()->id)->get();
        $jawabans = jawaban::where('userID', $id)->get();
        $siswa =  DB::table('siswas')->where('siswas.userID', $id)->get();
        $ortu =  DB::table('ortus')->where('ortus.userID',  $id)->get();
        return view('siswa.detail', compact('jawabans','data','siswa','ortu'));
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
        $kantin = User::find($id);
        $kantin->delete();
        toastr()->info('Berhasil di hapus!', 'Sukses');
        return redirect('siswa');
    }
}
