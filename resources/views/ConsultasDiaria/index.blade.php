@extends('adminlte::page')

@section('title', 'Consulta Medica')

@section('content_header')
    <h1> Nombre del Usuario : {{$usuario->Nombres}} {{$usuario->Apellidos}}</h1>
    <h1> Documento de Identidad : {{$usuario->Cedula}}</h1>
@stop

@section('content')

@if (Session::has('Mantenimiento_creado'))

<div class="card bg-success">
    <div class="card-header">
        <h3 class="card-title">Success</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
            </button>
        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {{session('Mantenimiento_creado') }}
    </div>
    <!-- /.card-body -->
</div>
@elseif(Session::has('Mantenimiento_Eliminiar'))

<div class="card bg-danger">
    <div class="card-header">
        <h3 class="card-title">Danger</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
            </button>
        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {{session('Mantenimiento_Eliminiar') }}
    </div>
    <!-- /.card-body -->
</div>
@endif


    <a class="btn btn-app bg-primary" href="{{ route('ConsultaDiariaCrear.crear',$usuario->id) }}">
        <span class="badge bg-green"></span>
        <i class="fas fa-cogs"></i> Realizar Consulta
    </a>





    <div class="card card-primary">
        <div class="card-header">
            <h2 class="card-title">Consusltas</h2>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive">
            <table class="table table-striped" id="equipostabla">
                <thead>
                    <tr>
                        <th scope="col">Temperatura</th>
                        <th scope="col">PesoCorporal</th>
                        <th scope="col">PulsoCardiaco</th>
                        <th scope="col">Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($consultaDiaria as $consulta)
                    <tr>
                        <td>{{$consulta->id}}</td>
                        <td>{{$consulta->FechaMantenimiento}}</td>
                        <td>{{$consulta->TipoMantenimiento}}</td>
                        <td>{{$consulta->usuario->nombre}}</td>
                        <td>
                    

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <!-- /.card-body -->
    </div>

@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>

<script> 
$(document).ready(function() {
  $('#equipostabla').DataTable({
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    },"order": [[ 0, "desc" ]]
  });
});
</script>

@stop