@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')
<h1></h1>
@stop

@section('content')
<form action="{{ route('Usuarios.update', $usuario->id)}}" enctype="multipart/form-data" method="POST">
  @csrf
  @method('PUT')

  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Editar Usuario Usuario</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-4 col-form-label">Nombres</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="Nombres" name="Nombres" value="{{$usuario->Nombres}}">
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-4 col-form-label">Apellidos</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="Apellidos" name="Apellidos" value="{{$usuario->Apellidos}}">
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-4 col-form-label">Cedula</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="Cedula" name="Cedula" value="{{$usuario->Cedula}}">
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-4 col-form-label">Fecha Nacimiento</label>
              <div class="col-sm-8">
                <input type="date" class="form-control" id="FechaNacimiento" name="FechaNacimiento"
                  value="{{$usuario->FechaNacimiento}}">
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-4 col-form-label">Edad </label>
              <div class="col-sm-8">
                <input type="number" class="form-control" id="Edad" name="Edad" value="{{$usuario->Edad}}">
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-4 col-form-label">Genero </label>
              <div class="col-sm-8">
                <select class="custom-select" id="Genero" name="Genero">
                  @if($usuario->Genero == "Masculino")
                  <option selected value="Masculino">Masculino</option>
                  <option value="Femenino">Femenino</option>
                  @else
                  <option value="Masculino">Masculino</option>
                  <option selected value="Femenino">Femenino</option>
                  @endif
                </select>
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
    <!-- /.card-body -->
  </div>


  <a class="btn btn-app bg-primary" href="/Usuarios">
    <span class="badge bg-green"></span><i class="fas fa-arrow-circle-left"></i> Volver
  </a>

  <button type="submit" class="btn btn-app bg-success"> <i class="fas fa-save"></i> Modificar</button>

</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop