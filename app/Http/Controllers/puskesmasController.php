<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
class puskesmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $datas =  DB::table('users')->where('level', '=', 3)->where('name','like',"%".$cari."%")->get();
       
        return view('puskesmas.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('puskesmas.create');
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
        $password = $request->password;
        $encrypted_password = bcrypt($password);
      
        $model->name = $request->name;
        $model->email = $request->email;
 
        $model->level = $request->level;
        $model->password = $encrypted_password;
        
     
        $validasi = Validator::make($data,[
            'name'=>'required|max:255|unique:users',
            'email'=>'required|email|max:255|unique:users',
            'password'=>'required|min:8',
            'level'=>'required',

        ]);
        if($validasi->fails())
        {
            return redirect()->route('puskesmas.create')->withInput()->withErrors($validasi);
        }

        $model->save();
   
        toastr()->success('Berhasil di buat!', 'Sukses');
        return redirect('/puskesmas');
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
        return view('puskesmas.ubah', compact('datas'));
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
      
        $validasi = Validator::make($data,[
            'name'=>'required|max:255',
            'email'=>'required|email|max:255|unique:users',
            

        ]);
        if($validasi->fails())
        {
            return redirect()->route('puskesmas.edit',[$id])->withErrors($validasi);
        }
        $model->save();
        toastr()->success('Berhasil di terupdate!', 'Sukses');
        return redirect('/puskesmas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kantin = User::findOrFail($id);
        $kantin->delete();
        toastr()->info('Berhasil di hapus!', 'Sukses');
        return redirect('puskesmas');
    }
}
