<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use Illuminate\Support\Facades\Session;
use App\Models\Mantenimiento;

class EquiposController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = Equipo::all();
        return view('Equipos.index', compact('equipos'));
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
        $equipos = new Equipo();
        
        if($request->hasFile('imagen')){
          $file = $request->file('imagen');
          $destino = 'img/';
          $filename = time()."-".$file->getClientOriginalName();
          $subir  = $request->file('imagen')->move('img',$filename);
          $equipos->imagen = $destino.$filename;
        }

       
        $equipos->area = $request->get('area');
        $equipos->nombre = $request->get('nombre');
        $equipos->marca = $request->get('marca');
        $equipos->modelo = $request->get('modelo');
        $equipos->series = $request->get('series');
        $equipos->activo = $request->get('activo');
        $equipos->fabrica = $request->get('fabrica');
        $equipos->Proveedor = $request->get('Proveedor');
        $equipos->TelProveedor = $request->get('TelProveedor');
        $equipos->FechaCompra = $request->get('FechaCompra');
        $equipos->TiempoGarantia = $request->get('TiempoGarantia');
        $equipos->ciclovida = $request->get('ciclovida');
        $equipos->fuenteAlimentacion = $request->get('fuenteAlimentacion');
        $equipos->voltaje = $request->get('voltaje');
        $equipos->corriente = $request->get('corriente');
        $equipos->frecuencia = $request->get('frecuencia');
        $equipos->potencia = $request->get('potencia');
        $equipos->presion = $request->get('presion');
        $equipos->capacidad = $request->get('capacidad');
        $equipos->riesgo = $request->get('riesgo');
        $equipos->uso = $request->get('uso');
        $equipos->propiedad = $request->get('propiedad');
        $equipos->mantenimiento = $request->get('mantenimiento');
        $equipos->preventivo = $request->get('preventivo');
        $equipos->manual = $request->get('manual');
        $equipos->anexonombre = $request->get('anexonombre');
        $equipos->anexoserie = $request->get('anexoserie');
        $equipos->anexomodelo = $request->get('anexomodelo');
        $equipos->anexoactivo = $request->get('anexoactivo');


        $equipos->descripcion = $request->get('descripcion');

        $equipos->save();
       
        $request->session()->flash('Equipo_Creado', 'El Equipo Biomedico ha sido creado con éxito');

        return redirect('/Equipos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipos = Equipo::find($id);
        return view('Equipos.ver')->with('equipos',$equipos);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipos = Equipo::find($id);
        return view('Equipos.Modificar')->with('equipos',$equipos);
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
        $equipos = Equipo::find($id);
        $file = $request->file('imagen');
        

        if($request->hasFile('imagen')){
            $filename = $file->getClientOriginalName();
            if($filename != $equipos->imagen ){      
                unlink($equipo->imagen);          
                $destino = 'img/';                
                $filename = time()."-".$file->getClientOriginalName();
                $subir  = $request->file('imagen')->move('img',$filename);
                $equipos->imagen = $destino.$filename;
            }else{
                $equipos->imagen = $destino.$filename;
            }
        }

        $equipos->area = $request->get('area');
        $equipos->nombre = $request->get('nombre');
        $equipos->marca = $request->get('marca');
        $equipos->modelo = $request->get('modelo');
        $equipos->series = $request->get('series');
        $equipos->activo = $request->get('activo');
        $equipos->fabrica = $request->get('fabrica');
        $equipos->Proveedor = $request->get('Proveedor');
        $equipos->TelProveedor = $request->get('TelProveedor');
        $equipos->FechaCompra = $request->get('FechaCompra');
        $equipos->TiempoGarantia = $request->get('TiempoGarantia');
        $equipos->ciclovida = $request->get('ciclovida');
        $equipos->fuenteAlimentacion = $request->get('fuenteAlimentacion');
        $equipos->voltaje = $request->get('voltaje');
        $equipos->corriente = $request->get('corriente');
        $equipos->frecuencia = $request->get('frecuencia');
        $equipos->potencia = $request->get('potencia');
        $equipos->presion = $request->get('presion');
        $equipos->capacidad = $request->get('capacidad');
        $equipos->riesgo = $request->get('riesgo');
        $equipos->uso = $request->get('uso');
        $equipos->propiedad = $request->get('propiedad');
        $equipos->mantenimiento = $request->get('mantenimiento');
        $equipos->preventivo = $request->get('preventivo');
        $equipos->manual = $request->get('manual');
        $equipos->anexonombre = $request->get('anexonombre');
        $equipos->anexoserie = $request->get('anexoserie');
        $equipos->anexomodelo = $request->get('anexomodelo');
        $equipos->anexoactivo = $request->get('anexoactivo');
        $equipos->descripcion = $request->get('descripcion');

        $equipos->save();
       
        $equipos = Equipo::find($id);

        $request->session()->flash('Equipo_Actualizado', 'El Equipo Biomedico ha sido Actualizado con éxito');
        return view('Equipos.ver')->with('equipos',$equipos);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipo = Equipo::findOrFail($id);
        $equipo->delete();

        unlink($equipo->imagen);
     
        session()->flash('Equipo_eliminado', 'El Equipo Biomedico ha sido eliminado con éxito');

        return redirect('/Equipos');
  
    }
}
