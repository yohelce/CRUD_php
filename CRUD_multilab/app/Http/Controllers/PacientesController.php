<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacientesPostRequest;
use App\Models\Pacientes;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pacientes::all();
        return response()->json([
            'status' => true,
            'pacientes' => $data
        ], 200);
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
        $data = Pacientes::create($request->all());
        $data->save();
        return response()->json([
            'status' => true,
            'message' => 'Paciente creado exitosamente',
            'pacientes' => $data
        ], 201); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function show(Pacientes $pacientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function edit(Pacientes $pacientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function update(PacientesPostRequest $request, Pacientes $paciente)
    {
        $paciente->update($request->all());
        $paciente->save();
        return response()->json([
            'status' => true,
            'message' => 'Paciente actualizado exitosamente',
            'pacientes' => $paciente
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pacientes $paciente)
    {
        $paciente->delete();

        return response()->json([
            'status' => true,
            'message' => "Paciente borrado exitosamente" 
        ], 200);
    }
}
