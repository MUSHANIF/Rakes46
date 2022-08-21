<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class pertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $datas =  DB::table('pertanyaans')->where('pertanyaan','like',"%".$cari."%")->get();
       
        return view('pertanyaan.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pertanyaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $model = new pertanyaan;

        $model->type = $request->type;
        $model->group = $request->group;
        $model->no = $request->no;
        $model->pertanyaan = $request->pertanyaan;
      
       
        
        $model->save();
        toastr()->success('Berhasil di buat!', 'Sukses');
        return redirect('pertanyaan');
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
        $datas = pertanyaan::find($id);
        return view('pertanyaan.ubah', compact('datas'));
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
        $model = pertanyaan::find($id);
      
        $model->type = $request->type;
        $model->group = $request->group;
        $model->no = $request->no;
        $model->pertanyaan = $request->pertanyaan;
        $model->save();
        toastr()->success('Berhasil di terupdate!', 'Sukses');
        return redirect('/pertanyaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kantin = pertanyaan::find($id);
        $kantin->delete();
        toastr()->info('Berhasil di hapus!', 'Sukses');
        return redirect('pertanyaan');
    }
}
