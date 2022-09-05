<?php

namespace App\Http\Controllers;

use App\Models\jawaban;
use App\Models\pertanyaan;
use Illuminate\Http\Request;

class KuisionerController extends Controller
{
    public function createStepOne(Request $request)
    {
        $datas = pertanyaan::where('type', '=', 1)
            ->where('group', '=', 'a')
            ->get();
        $kuisioner = $request->session()->get('kuisioner');
        return view('kuisioner.step1', compact('datas', 'kuisioner'));
    }

    public function storeStepOne(Request $request)
    {

        // $jumlahPertanyaan = $request["jumlahPertanyaan"];

        // for ($i = 1; $i <= $jumlahPertanyaan; $i++) {
        //     $userID = $request->userID;
        //     $pertanyaanID = $request->pertanyaanID[$i];
        //     $jawaban = $request->jawaban[$i];
        // }

        // return $request;

        if (!$request->session()->get('kuisioner')) {
            $jawaban = new jawaban();
            $jawaban->fill($request->all());
            $request->session()->put('kuisioner', $jawaban);
        } else {
            $jawaban = $request->session()->get('kuisioner');
            $jawaban->fill($request->all());
            $request->session()->put('kuisioner', $jawaban);
        }

        // $kuisioner = $request->session()->get('kuisioner');
        // return $kuisioner;

        return redirect()->route('step2');
    }

    public function createStepTwo(Request $request)
    {
        $datas = pertanyaan::where('type', '=', 1)
            ->where('group', '=', 'b')
            ->get();
        $kuisioner = $request->session()->get('kuisioner');
        // return $kuisioner;
        return view('kuisioner.step2', compact('datas', 'kuisioner'));
    }

    public function storeStepTwo(Request $request)
    {
        // return $request->pertn;
        $kuisioner = $request->session()->get('kuisioner');
        // $request->session()->put('kuisioner.userID', $request->userID);
        $request->session()->put('kuisioner.pertanyaanID', $request->pertanyaanID);
        // $request->session()->push('kuisioner.', $request->jawaban);
        return $kuisioner;
    }
}
