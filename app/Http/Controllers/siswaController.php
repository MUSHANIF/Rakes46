<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\jawaban;
use App\Models\pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas =  DB::table('kelas')->get();
        $siswa =  DB::table('siswas')->where('siswas.userID',  Auth::user()->id)->get();
        $ortu =  DB::table('ortus')->where('ortus.userID',  Auth::user()->id)->get();
        $pertanyaans = pertanyaan::all();
        $jawabans = collect(jawaban::where('userID', auth()->user()->id)->get());
        return view('siswaid.index', compact('siswa', 'ortu', 'kelas', 'jawabans', 'pertanyaans'), [
            "title" => "List Siswa",
            'datasiswa' => DB::table('siswas')->where('siswas.userID',  Auth::user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $model = new siswa;
        $model->nisn = $request->nisn;
        $model->userID = $request->userID;
        $model->kelasID = $request->kelasID;
        $model->nis = $request->nis;
        $model->nama_lengkap = $request->nama_lengkap;
        $model->nama_panggilan = $request->nama_panggilan;
        $model->tmp_lahir = $request->tmp_lahir;
        $model->tgl_lahir = $request->tgl_lahir;
        $model->jns_kelamin = $request->jns_kelamin;
        $model->gol_darah = $request->gol_darah;
        $model->anak_ke = $request->anak_ke;
        $model->tggl_bersama = $request->tggl_bersama;
        $model->alamat = $request->alamat;
        $model->no_telp = $request->no_telp;
        $model->email = $request->email;
        $model->disabilitas = $request->disabilitas;

        $validasi = Validator::make($data, [
            'nisn' => 'required|min:10|unique:siswas',
            'email' => 'required|max:255|unique:siswas',
            'nis' => 'required|min:5|unique:siswas',
            'nama_lengkap' => 'required|max:25',
            'kelasID' => 'required',
            'nama_panggilan' => 'required|max:8',
            'tmp_lahir' => 'required|max:10',
            'jns_kelamin' => 'required',
            'gol_darah' => 'required',
            'anak_ke' => 'required|max:2',
            'tggl_bersama' => 'required',
            'alamat' => 'required|max:30',
            'no_telp' => 'required|max:13',
            'email' => 'required|max:40',
            'disabilitas' => 'required',
        ]);

        if ($validasi->fails()) {
            return redirect()->route('siswaid.index')->withInput()->withErrors($validasi);
        }

        $model->save();

        toastr()->success('Berhasil di buat!', 'Sukses');
        return redirect('/siswaid');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function tampilkan(Request $request)
    {
        $pertanyaans = pertanyaan::all();
        $jumlahGroupA = $pertanyaans->where('type', '1')->where('group', 'a')->count();
        $jumlahGroupB = $pertanyaans->where('type', '1')->where('group', 'b')->count();
        $jumlahGroupC = $pertanyaans->where('type', '1')->where('group', 'c')->count();

        $jawabans = jawaban::where('userID', auth()->user()->id)->get();

        if ($request->group == "a") {
            $jawabans = jawaban::where('userID', auth()->user()->id)->skip(0)->take($jumlahGroupA)->get();
        } elseif ($request->group == "b") {
            $jawabans = jawaban::where('userID', auth()->user()->id)->skip($jumlahGroupA)->take($jumlahGroupB)->get();
        } elseif ($request->group == 'c') {
            $jawabans = jawaban::where('userID', auth()->user()->id)->skip($jumlahGroupA + $jumlahGroupB)->take($jumlahGroupC)->get();
        }

        return view('jawaban.isi', compact('jawabans'), [
            'groupA' => $jumlahGroupA
        ]);
    }
}
