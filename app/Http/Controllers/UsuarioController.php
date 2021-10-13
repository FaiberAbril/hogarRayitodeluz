<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
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
        $usuarios = Usuario::all();
        return view('Usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Usuarios.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->Nombres = $request->get('Nombres');
        $usuario->Apellidos = $request->get('Apellidos');
        $usuario->Cedula = $request->get('Cedula');
        $usuario->FechaNacimiento = $request->get('FechaNacimiento');

        $usuario->save();
       
        $request->session()->flash('Usuario_Creado', 'El Usuario ha sido creado con éxito');

        return redirect('/Usuarios');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('Usuarios.editar')->with('usuario',$usuario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario =Usuario::find($id);
        $usuario->Nombres = $request->get('Nombres');
        $usuario->Apellidos = $request->get('Apellidos');
        $usuario->Cedula = $request->get('Cedula');
        $usuario->FechaNacimiento = $request->get('FechaNacimiento');

        $usuario->save();
       
        $request->session()->flash('Usuario_editado', 'El Usuario ha sido editado con éxito');

        return redirect('/Usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        session()->flash('Usuario_eliminado', 'El Usuario ha sido eliminado con éxito');
        return redirect('/Usuarios');
    }
}
