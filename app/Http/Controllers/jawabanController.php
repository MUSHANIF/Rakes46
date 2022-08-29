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
        $data = DB::table('pertanyaans')
                    ->where('type', '=' , 1 )
                    ->where('group', '=','a')
                    ->get();
        return view(
            'jawaban.index', 
            compact('datas', 'data'), 
            [
                "title" => "Kuisioner"
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
        
        // return $request;
        
        $model = $request->all();
        $model = new jawaban;
        // $model->id = $request->id;
        $model->userID = $request->userID;
        $model->id_pertanyaan = $request->id_pertanyaan;
        $model->jawaban = $request->jawaban;
        $model->save();
        return redirect('jawaban.index');

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
