@extends('adminlte::page')

@section('title', 'Crear')

@section('content_header')
<h1>Nuevo Usuario</h1>
@stop

@section('content')
<form action="/Usuario" enctype="multipart/form-data" method="POST">
    @csrf



    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Caracteristicas Propias del Equipo</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Nombre</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="nombre" name="nombre" >
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Marca</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="marca" name="marca" >
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Modelo</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="modelo" name="modelo">
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Serie</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="series" name="series" >
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Numero de Activo</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="activo" name="activo">
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Fabricante</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="fabrica" name="fabrica" >
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Proveedor</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="Proveedor" name="Proveedor">
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Tel Proveedor</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="TelProveedor" name="TelProveedor" >
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Fecha Compra</label>
                            <div class="col-sm-8">
                              <input type="date" class="form-control" id="FechaCompra" name="FechaCompra">
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Tiempo Garantia(Años)</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" id="TiempoGarantia" name="TiempoGarantia" >
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Ciclo de vida util(años)</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" id="ciclovida" name="ciclovida">
                            </div>
                          </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>

            

     <a class="btn btn-app bg-primary" href="/Usuario">
    <span class="badge bg-green"></span><i class="fas fa-cogs "></i>  Volver
</a>

<button type="submit" class="btn btn-app btn-success"> <i class="fas fa-cogs fa-2x"></i> Guardar</button>

</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> document.getElementById("imagen").onchange = function (e) {
        var file = e.target.files[0];
        if (file) {
            // Creamos el objeto de la clase FileReader
            var reader = new FileReader();
            // Le decimos que cuando este listo ejecute el código interno
            reader.onload = function () {
                $('#vistaImagen').attr("src", reader.result);
            };
        }
        // Leemos el archivo subido y se lo pasamos a nuestro fileReader
        reader.readAsDataURL(file);
    }</script>
@stop