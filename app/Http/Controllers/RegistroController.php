<?php

namespace App\Http\Controllers;
use App\Models\Registro;
use App\Models\Carreras;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Registro::all();
        return view("registros.index",["registros" => $registros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carreras  = Carreras::pluck('nom_Carrera','id_Carrera');
        return view('registros.new', compact('carreras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registros = new Registro();
        $registros-> id_Usuario = $request->post('id_Usuario');
        $registros-> nom_Usuario = $request->post('nom_Usuario');
        $registros-> cod_Estudiantil = $request->post('cod_Estudiantil');
        $registros-> id_Carrera = $request->post('id_Carrera');
        $registros-> fec_Registro = $request->post('fec_Registro');

        $registros->save();
        return redirect()->route('registros.index')->with('success', 'Matricula Registrada Correctamente');

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
