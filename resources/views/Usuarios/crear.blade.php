@extends('adminlte::page')

@section('title', 'Crear')

@section('content_header')
<h1></h1>
@stop

@section('content')
<form action="/Usuarios" enctype="multipart/form-data" method="POST">
    @csrf



    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Datos del Nuevo Usuario</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Nombres</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="Nombres" name="Nombres" required >
                            </div>
                          </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Apellidos</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="Apellidos" name="Apellidos" required >
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Cédula </label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="Cedula" name="Cedula" required>
                            </div>
                          </div>
                    </div>
                </div>

                
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Fecha Nacimiento</label>
                            <div class="col-sm-8">
                              <input type="date" class="form-control" id="FechaNacimiento" name="FechaNacimiento" required>
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Edad </label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" id="Edad" name="Edad" required>
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
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
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

<button type="submit" class="btn btn-app bg-success"> <i class="fas fa-save"></i> Guardar</button>

</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
