<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\jawaban;
use App\Models\pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class jawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $siswa =  DB::table('siswas')->where('siswas.userID',  Auth::user()->id)->get();

        if (auth()->user()->jawaban != NULL) {
            $pertanyaans = pertanyaan::all();
            $jumlahGroupA = $pertanyaans->where('type', '1')->where('group', 'a')->count();
            $jumlahGroupB = $pertanyaans->where('type', '1')->where('group', 'b')->count();
            $jumlahGroupC = $pertanyaans->where('type', '1')->where('group', 'c')->count();

            $jawabanGroupA = auth()->user()->jawaban->where('userID', auth()->user()->id)->skip(0)->take($jumlahGroupA)->get();
            $jawabanGroupB = auth()->user()->jawaban->where('userID', auth()->user()->id)->skip($jumlahGroupA)->take($jumlahGroupB)->get();
            $jawabanGroupC = auth()->user()->jawaban->where('userID', auth()->user()->id)->skip($jumlahGroupA + $jumlahGroupB)->take($jumlahGroupC)->get();

            if ($jawabanGroupB->count() == 0) {
                $data = pertanyaan::where('type', '=', 1)
                    ->where('group', '=', 'b')
                    ->get();
                return view('jawaban.index', compact('data', 'siswa'), [
                    "title" => "Kuisioner",
                    'datasiswa' => DB::table('siswas')->where('siswas.userID',  Auth::user()->id)->get(),
                ]);
            }

            if ($jawabanGroupC->count() == 0) {
                $data = pertanyaan::where('type', '=', 1)
                    ->where('group', '=', 'c')
                    ->get();
                return view('jawaban.index', compact('data', 'siswa'), [
                    "title" => "Kuisioner",
                    'datasiswa' => DB::table('siswas')->where('siswas.userID',  Auth::user()->id)->get(),
                ]);
            }

            $jawabans = jawaban::where('userID', auth()->user()->id)->get();
            return view('jawaban.isi', compact('jawabans'));
        }

        $data = pertanyaan::where('type', '=', 1)
            ->where('group', '=', 'a')
            ->get();
        return view('jawaban.index', compact('data', 'siswa'), [
            "title" => "Kuisioner",
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
        return view('jawaban.update');
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

        return redirect('/isijawaban');
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
