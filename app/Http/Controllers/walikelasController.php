<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\kela;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Alert;

class walikelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $datas =  User::where('level', '=', 2)->where('name', 'like', "%" . $cari . "%")->get();

        return view('wali_kelas.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wali_kelas.create');
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
        $model = new User;

        $model->name = $request->name;
        $model->email = $request->email;
        $model->level = $request->level;
        $model->password = bcrypt($request->password);

        $validasi = Validator::make($data, [
            'name' => 'required|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8',
            'level' => 'required',
        ]);
        if ($validasi->fails()) {
            return back()->withInput()->withErrors($validasi);
        }

        $model->save();

        toastr()->success('Berhasil di buat!', 'Sukses');
        return redirect('/wali_kelas');
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
        $datas = User::find($id);
        return view('wali_kelas.ubah', compact('datas'));
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
        $data = $request->all();
        $model = User::findOrFail($id);

        $model->name = $request->name;
        $model->email = $request->email;
        $model->level = $request->opsi;

        $validasi = Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
        ]);
        if ($validasi->fails()) {
            return back()->withInput()->withErrors($validasi);
        }
        $model->save();
        toastr()->success('Berhasil di terupdate!', 'Sukses');
        return redirect('/wali_kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        kela::where('userID', $id)->update([
            'nip' => null,
            'nama_guru' => null,
            'thn_ajaran' => null,
        ]);

        toastr()->info('Berhasil di reset!', 'Sukses');
        return redirect('/wali_kelas');
    }
}
