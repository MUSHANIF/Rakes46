<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\jawaban;
use App\Models\pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class daftarsiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $datas =  User::where('level', '=', 1)->where('name', 'like', "%" . $cari . "%")->get();

        return view('siswa.index', compact('datas'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $jumlahGroupA = pertanyaan::where('type', '1')->where('group', 'a')->count();
        $data =  DB::table('kelas')->where('kelas.userID',  Auth::user()->id)->get();
        $jawabans = jawaban::where('userID', $id)->get();
        $siswa =  DB::table('siswas')->where('siswas.userID', $id)->get();
        $ortu =  DB::table('ortus')->where('ortus.userID',  $id)->get();
        return view('siswa.detail', compact('jawabans', 'data', 'siswa', 'ortu'), [
            'groupA' => $jumlahGroupA //buat ngecek
        ]);
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
        return view(
            'siswa.ubah',
            compact('datas'),
            [
                "title" => "List Siswa"
            ]


        );
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
