<?php

namespace App\Http\Controllers;

use App\Models\ortu;
use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class dataortuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('ortus');
        $siswa = DB::table('siswas')->get();
        // $data =  DB::table('siswas')->where('siswas.userID' , Auth::user()->id)->get();
        $data =  DB::table('ortus')->where('ortus.userID',  Auth::user()->id)->get();
        return view('biodata_ortu.index', compact('datas', 'data', 'siswa'), [
            "title" => "Data Orang Tua"
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
        $model = new ortu;

        $model->userID = $request->userID;
        $model->nama_ayah = $request->nama_ayah;
        $model->tmplahir_ayah = $request->tmplahir_ayah;
        $model->pekerjaan_ayah = $request->pekerjaan_ayah;
        $model->alamat_ayah = $request->alamat_ayah;
        $model->nama_ibu = $request->nama_ibu;
        $model->tmplahir_ibu = $request->tmplahir_ibu;
        $model->pekerjaan_ibu = $request->pekerjaan_ibu;
        $model->alamat_ibu = $request->alamat_ibu;


        $validasi = Validator::make($data, [
            'nama_ayah' => 'required|max:50',
            'tmplahir_ayah' => 'required|max:225',
            'pekerjaan_ayah' => 'required|max:100',
            'alamat_ayah' => 'required|max:225',
            'nama_ibu' => 'required|max:50',
            'tmplahir_ibu' => 'required|max:225',
            'pekerjaan_ibu' => 'required|max:100',
            'alamat_ibu' => 'required|max:225',
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
}
