<?php

namespace App\Http\Controllers;

use App\Models\ortu;
use App\Models\siswa;
use App\Models\jawaban;
use App\Models\pertanyaan;
use Illuminate\Http\Request;
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
        $siswa =  siswa::where('userID',  auth()->user()->id)->first();
        $ortu =  ortu::where('userID',  auth()->user()->id)->first();
        $pertanyaans = pertanyaan::all();
        $jawabans = jawaban::where('userID', auth()->user()->id)->get();

        return view('siswaid.index', compact('siswa', 'ortu', 'jawabans', 'pertanyaans'), [
            "title" => "List Siswa",
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
            'nisn' => 'required|min:10|unique:siswas,nisn',
            'email' => 'required|max:255|unique:siswas,email',
            'nis' => 'required|min:5|unique:siswas,nis',
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

    public function tampilkan()
    {
        if (empty(auth()->user()->jawaban)) {
            return back();
        }

        $jawabanUser = jawaban::where('userID', auth()->user()->id);

        $jawabans = $jawabanUser->get();

        return view('jawaban.isi', compact('jawabans'));
    }

    public function tampilkanPerGroup(pertanyaan $pertanyaan)
    {
        if (empty(auth()->user()->jawaban)) {
            return back();
        }

        $jawabanUser = jawaban::where('userID', auth()->user()->id)->whereRelation('pertanyaan', 'group', "$pertanyaan->group");

        $jawabans = $jawabanUser->get();

        return view('jawaban.isi', compact('jawabans'));
    }
}
