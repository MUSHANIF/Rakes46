<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Auth;
use Validator;
use App\Models\siswa;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas =  DB::table('siswas')->get();
        $kelas =  DB::table('kelas')->get();
        $data =  DB::table('siswas')->where('siswas.userID' ,  Auth::user()->id )->get();
        $data1 =  DB::table('ortus')->where('ortus.userID' ,  Auth::user()->id )->get();
        return view('siswaid.index',compact('data','datas','kelas','data1'),
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

        
     
        
     
        $validasi = Validator::make($data,[
            'nisn'=>'required|max:16|unique:siswas',
            'email'=>'required|max:255|unique:siswas',
            'nis' => 'required|max:5|unique:siswas',
            

        ]);
        if($validasi->fails())
        {
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
