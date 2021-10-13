@extends('adminlte::page')

@section('title', 'Crear consulta')

@section('content_header')
<h1> Nombre del Usuario : {{$usuario->Nombres}} {{$usuario->Apellidos}}</h1>
    <h1> Documento de Identidad : {{$usuario->Cedula}}</h1>
@stop

@section('content')
<form action="/ConsultaDiaria" enctype="multipart/form-data" method="POST">
    @csrf



    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Datos de la consulta</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Temperatura</label>
                            <div class="col-sm-8">
                              <input type="number" step="any"  class="form-control" id="Temperatura" name="Temperatura" >
                            </div>
                          </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Peso Corporal(kg)</label>
                            <div class="col-sm-8">
                              <input type="number" step="any" class="form-control" id="PesoCorporal" name="PesoCorporal" >
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Pulso Cardiaco</label>
                            <div class="col-sm-8">
                              <input type="number"  class="form-control" id="PulsoCardiaco" name="PulsoCardiaco">
                            </div>
                          </div>
                    </div>
                </div>

                
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Fecha Consulta</label>
                            <div class="col-sm-8">
                              <input type="date" class="form-control" id="FechaConsulta" name="FechaConsulta">
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <input type="hidden" name="Usuarios_id" value="{{$usuario->id}}">

    </div>

            

     <a class="btn btn-app bg-primary"  href="{{ route('ConsultaDiaria.inicio',$usuario->id) }}">
     <span class="badge bg-green"></span><i class="fas fa-arrow-circle-left"></i> Volver Volver
    </a>

    <button type="submit" class="btn btn-app bg-success"> <i class="fas fa-save"></i> Guardar</button>

</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
