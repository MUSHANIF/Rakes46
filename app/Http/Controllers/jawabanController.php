<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\siswa;
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
        $siswa =  siswa::where('userID', Auth::user()->id)->first();
        $pertanyaans = pertanyaan::all();

        // Ketika user blm jawab samsek
        $data = pertanyaan::where('type', '=', 1)
            ->where('group', '=', 'a')
            ->get();

        if (!empty(auth()->user()->jawaban)) {
            $jawabanUser = auth()->user()->jawaban;

            $jumlahGroupA = $pertanyaans->where('type', '1')->where('group', 'a')->count();
            $jumlahGroupB = $pertanyaans->where('type', '1')->where('group', 'b')->count();
            $jumlahGroupC = $pertanyaans->where('type', '1')->where('group', 'c')->count();

            $jawabanGroupA = $jawabanUser->skip(0)->take($jumlahGroupA)->get();
            $jawabanGroupB = $jawabanUser->skip($jumlahGroupA)->take($jumlahGroupB)->get();
            $jawabanGroupC = $jawabanUser->skip($jumlahGroupA + $jumlahGroupB)->take($jumlahGroupC)->get();

            // Ketika user baru jawab group a dan b
            if ($jawabanGroupC->isEmpty()) {
                $data = pertanyaan::where('type', '=', 1)
                    ->where('group', '=', 'c')
                    ->get();
            }

            // Ketika user baru jawab group a
            if ($jawabanGroupB->isEmpty()) {
                $data = pertanyaan::where('type', '=', 1)
                    ->where('group', '=', 'b')
                    ->get();
            }

            // Jika jawaban sudah kejawab semua
            if ($jawabanGroupC->isNotEmpty() && $jawabanGroupB->isNotEmpty()) {
                return redirect('/isijawaban');
            }
        }

        return view('jawaban.index', compact('data', 'siswa'));
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

    public function editKuisioner(Request $request)
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

        return view('jawaban.update', compact('pertanyaans', 'jawabans'), [
            'datasiswa' => DB::table('siswas')->where('siswas.userID',  Auth::user()->id)->get(),
        ]);
    }

    public function updateKuisioner(Request $request)
    {
        // $jawaban = jawaban::where('userID', auth()->user()->id)->firstWhere('pertanyaanID', $request->pertanyaanID[1]);
        // return $jawaban;

        $jumlahPertanyaan = $request["jumlahPertanyaan"];

        for ($i = 1; $i <= $jumlahPertanyaan; $i++) {
            $model = jawaban::where('userID', auth()->user()->id)->firstWhere('pertanyaanID', $request->pertanyaanID[$i]);
            $model->userID = $request->userID;
            $model->pertanyaanID = $request->pertanyaanID[$i];
            $model->jawaban = $request->jawaban[$i];
            $model->save();
        }

        return redirect('/isijawaban');
    }
}
