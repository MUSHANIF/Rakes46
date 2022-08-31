<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\pertanyaan;
use App\Models\jawaban;
use Illuminate\Http\Request;
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
        $datas = DB::table('pertanyaans')->get();
        $data = pertanyaan::where('type', '=', 1)
            ->where('group', '=', 'a')
            ->get();
        return view('jawaban.index', compact('datas', 'data'), [
            "title" => "Kuisioner"
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

        $request['jawaban'] = [
            $request->boolean('jawaban.pertanyaan1'),
            $request->boolean('jawaban.pertanyaan2'),
            $request->boolean('jawaban.pertanyaan3'),
            $request->boolean('jawaban.pertanyaan4'),
            $request->boolean('jawaban.pertanyaan5'),
            $request->boolean('jawaban.pertanyaan6'),
            $request->boolean('jawaban.pertanyaan7'),
        ];

        $model = new jawaban;
        $model->userID = $request->userID;
        $model->jawaban = $request->jawaban;
        $model->save();

        return redirect('/kuisioner');
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
