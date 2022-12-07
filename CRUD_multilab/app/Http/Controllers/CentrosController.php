<?php

namespace App\Http\Controllers;

use App\Http\Requests\CentrosPostRequest;
use Illuminate\Http\Request;
use App\Models\Centros;
use Illuminate\Support\Facades\Http;

class CentrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Centros::all();
        return response()->json([
            'status' => true,
            'centros' => $data
        ], 200);
        //
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
    public function store(CentrosPostRequest $request)
    {
        $data = Centros::create($request->all());
        $data->save();
        return response()->json([
            'status' => true,
            'message' => 'Centro creado exitosamente',
            'centros' => $data
        ], 200); 
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
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
     * @param  \App\Models\Centros $centro
     * @return \Illuminate\Http\Response
     */
    public function update(CentrosPostRequest $request, Centros $centro)
    {   
        $centro->update($request->all());
        $centro->save();
        return response()->json([
            'status' => true,
            'message' => 'Centro actualizado exitosamente',
            'centros' => $centro
        ], 200); 
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Centros $centro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Centros $centro)
    {
        $centro->delete();

        return response()->json([
            'status' => true,
            'message' => "Centro borrado exitosamente" 
        ], 200);
        //
    }
}
