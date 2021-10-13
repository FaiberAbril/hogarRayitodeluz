<?php

namespace App\Http\Controllers;

use App\Models\ConsultaDiaria;
use App\Models\Usuario;
use Illuminate\Http\Request;

class ConsultaDiariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
     
    }

    public function inicio($id)
    {
        $usuario = Usuario::findOrFail($id);
        $consultaDiaria = ConsultaDiaria::where('Usuario_id', $id)->get();
        return view('ConsultasDiaria.index', compact('usuario', 'consultaDiaria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function crear($id)
    {
        $usuario = Usuario::find($id);
        return view('ConsultasDiaria.crear')->with('usuario',$usuario);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ConsultaDiaria  $consultaDiaria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        $consultaDiaria = ConsultaDiaria::where('Usuarios_id', $id)->get();
        return view('ConsultasDiaria.index', compact('usuario', 'consultaDiaria'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ConsultaDiaria  $consultaDiaria
     * @return \Illuminate\Http\Response
     */
    public function edit(ConsultaDiaria $consultaDiaria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ConsultaDiaria  $consultaDiaria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConsultaDiaria $consultaDiaria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ConsultaDiaria  $consultaDiaria
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConsultaDiaria $consultaDiaria)
    {
        //
    }
}
