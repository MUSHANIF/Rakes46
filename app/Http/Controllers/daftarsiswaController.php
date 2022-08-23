<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
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
        $datas =  DB::table('users')->where('level', '=', 1)->where('name','like',"%".$cari."%")->get();
<<<<<<< HEAD
       
        return view('superadmin.siswa.index', compact('datas'));
=======
        $data =  DB::table('kelas')->where('kelas.userID' ,  Auth::user()->id )->get();
        return view('siswa.index', compact('datas','data'));
>>>>>>> 7fadac3c731ee58708bb7841ef8167c62b0f6dad
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
        return view('siswa.ubah', compact('datas'));
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
