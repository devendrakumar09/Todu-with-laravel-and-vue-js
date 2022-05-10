<?php

namespace App\Http\Controllers;

use App\Models\Todu;
use Illuminate\Http\Request;

class ToduController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todus  = Todu::all();
        return response()->json($todus,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',            
        ]);

        $data = Todu::create($request->all());
        return response()->json($data,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todu  $todu
     * @return \Illuminate\Http\Response
     */
    public function show(Todu $todu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todu  $todu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todu $todu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todu  $todu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todu $todu)
    {
        $todu->delete();
        return response()->json('deleted Successfully',204);
    }
}
