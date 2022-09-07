<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\pertanyaan;
use App\Models\jawaban;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class jawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (jawaban::find(auth()->user()->jawaban)) {
            return redirect('/isikuisioner')->with('have', 'You Already Answered The Questions');
        }

        $datas = DB::table('pertanyaans')->get();
        $data = pertanyaan::where('type', '=', 1)
            ->where('group', '=', 'a')
            ->get();
        return view('jawaban.index', compact('datas', 'data'), [
            "title" => "Kuisioner",
            'datasiswa' => DB::table('siswas')->where('siswas.userID' ,  Auth::user()->id )->get(),
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
        // return $request->jawaban[2];
        // return $request;

        $jumlahPertanyaan = $request["jumlahPertanyaan"];

        for ($i = 1; $i <= $jumlahPertanyaan; $i++) {
            $model = new jawaban;
            $model->userID = $request->userID;
            $model->pertanyaanID = $request->pertanyaanID[$i];
            $model->jawaban = $request->jawaban[$i];
            $model->save();
        }

        return redirect('/isikuisioner');
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
        if (!jawaban::find(auth()->user()->jawaban)) {
            return redirect('/kuisioner')->with('dont', "You haven't answered the question");
        }

        $jawabans = jawaban::all();
        return view('jawaban.isi', compact('jawabans'));
    }
}
