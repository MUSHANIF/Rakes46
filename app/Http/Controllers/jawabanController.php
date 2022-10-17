<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\siswa;
use App\Models\jawaban;
use App\Models\pertanyaan;
use Illuminate\Http\Request;
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
        $jawabanUser = auth()->user()->jawaban;

        // Ketika user blm jawab samsek
        $data = pertanyaan::where('type', 1)
            ->where('group', 'a')
            ->get();

        if (!empty(auth()->user()->jawaban)) {
            $jumlahGroupA = $pertanyaans->where('type', '1')->where('group', 'a')->count();
            $jumlahGroupB = $pertanyaans->where('type', '1')->where('group', 'b')->count();
            $jumlahGroupC = $pertanyaans->where('type', '1')->where('group', 'c')->count();
            $jumlahGroupD = $pertanyaans->where('type', '1')->where('group', 'd')->count();
            $jumlahGroupE = $pertanyaans->where('type', '1')->where('group', 'e')->count();
            $jumlahGroupF = $pertanyaans->where('type', '1')->where('group', 'f')->count();
            $jumlahGroupG = $pertanyaans->where('type', '1')->where('group', 'g')->count();

            $jawabanGroupA = $jawabanUser->skip(0)
                ->take($jumlahGroupA)->get();

            $jawabanGroupB = $jawabanUser->skip($jumlahGroupA)
                ->take($jumlahGroupB)->get();

            $jawabanGroupC = $jawabanUser->skip($jumlahGroupA + $jumlahGroupB)
                ->take($jumlahGroupC)->get();

            $jawabanGroupD = $jawabanUser->skip($jumlahGroupA + $jumlahGroupB + $jumlahGroupC)
                ->take($jumlahGroupD)->get();

            $jawabanGroupE = $jawabanUser->skip($jumlahGroupA + $jumlahGroupB + $jumlahGroupC + $jumlahGroupD)
                ->take($jumlahGroupE)->get();

            $jawabanGroupF = $jawabanUser->skip($jumlahGroupA + $jumlahGroupB + $jumlahGroupC + $jumlahGroupD + $jumlahGroupE)
                ->take($jumlahGroupF)->get();

            $jawabanGroupG = $jawabanUser->skip($jumlahGroupA + $jumlahGroupB + $jumlahGroupC + $jumlahGroupD + $jumlahGroupE + $jumlahGroupF)
                ->take($jumlahGroupG)->get();

            // Ketika user sudah jawab group a, b, c, d, e, dan f
            if ($jawabanGroupG->isEmpty()) {
                $data = pertanyaan::where('type', 1)
                    ->where('group', 'g')
                    ->get();
            }

            // Ketika user sudah jawab group a, b, c, d, dan e
            if ($jawabanGroupF->isEmpty()) {
                $data = pertanyaan::where('type', 1)
                    ->where('group', 'f')
                    ->get();
            }

            // Ketika user sudah jawab group a, b, c, dan d
            if ($jawabanGroupE->isEmpty()) {
                $data = pertanyaan::where('type', 1)
                    ->where('group', 'e')
                    ->get();
            }

            // Ketika user sudah jawab group a, b, dan c
            if ($jawabanGroupD->isEmpty()) {
                $data = pertanyaan::where('type', 1)
                    ->where('group', 'd')
                    ->get();
            }

            // Ketika user sudah jawab group a dan b
            if ($jawabanGroupC->isEmpty()) {
                $data = pertanyaan::where('type', 1)
                    ->where('group', 'c')
                    ->get();
            }

            // Ketika user sudah jawab group a
            if ($jawabanGroupB->isEmpty()) {
                $data = pertanyaan::where('type', 1)
                    ->where('group', 'b')
                    ->get();
            }

            // Jika jawaban sudah kejawab semua --sementara
            if ($jawabanGroupG->isNotEmpty()) {
                return redirect('/isijawaban');
            }
        }

        // Jika jawaban sudah kejawab semua --kalo dah semua
        if ($jawabanUser->count() == $pertanyaans->count()) {
            return redirect('/isijawaban');
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
        // return $request;

        $jumlahPertanyaan = $request["jumlahPertanyaan"];

        for ($i = 1; $i <= $jumlahPertanyaan; $i++) {
            $model = new jawaban;
            $model->userID = $request->userID;
            $model->pertanyaanID = $request->pertanyaanID[$i];
            $model->jawaban = $request->jawaban[$i];
            $model->save();
        }

        toastr()->success('Berhasil Menjawab Pertanyaan!', 'Sukses');
        return redirect("/isijawaban/$request->group")->with('menjawab', 'Berhasil Menjawab Pertanyaan');
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

    public function editKuisioner(pertanyaan $pertanyaan)
    {
        if (empty(auth()->user()->jawaban)) {
            return back();
        }

        $jawabanUser = jawaban::where('userID', auth()->user()->id)->whereRelation('pertanyaan', 'group', "$pertanyaan->group");

        $jawabans = $jawabanUser->get();

        return view('jawaban.update', compact('jawabans'));
    }

    public function updateKuisioner(Request $request)
    {
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
