@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
<h1>Usuarios</h1>
@stop

@section('content')





<a class="btn btn-app bg-primary" href="{{ route('Usuarios.create') }}">
Nuevo Usuario
    <i class="fas fa-plus"></i>
</a>



<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Usuarios</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">
        <table class="table table-striped" id="equipostabla">
            <thead>
                <tr>
                    <th scope="col">Documento</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Notas Medicas</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->Cedula}}</td>
                    <td> {{$usuario->Nombres}} {{$usuario->Apellidos}}</td>

                    <td> 
                        <a class="btn  btn-default" href="ConsultaDiaria/{{$usuario->id}}">
                            <i class="fas fa-notes-medical"></i>
                        </a>

                    </td>

                    <td>

                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default-{{$usuario->id}}">
                            <i class="fas fa-eye"></i>
                        </button>

                        <div class="modal fade" id="modal-default-{{$usuario->id}}" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Usuario Detallado</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-5 col-form-label">Nombre
                                                completo</label>
                                            <div class="col-sm-7">
                                                <input type="text" readonly class="form-control-plaintext"
                                                    id="staticEmail"
                                                    value="{{$usuario->Nombres}} {{$usuario->Apellidos}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-5 col-form-label">Documento de
                                                identidad</label>
                                            <div class="col-sm-7">
                                                <input type="text" readonly class="form-control-plaintext"
                                                    id="staticEmail" value="{{$usuario->Cedula}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-5 col-form-label">Fecha
                                                Nacimiento</label>
                                            <div class="col-sm-7">
                                                <input type="text" readonly class="form-control-plaintext"
                                                    id="staticEmail" value="{{$usuario->FechaNacimiento}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-5 col-form-label">Edad</label>
                                            <div class="col-sm-7">
                                                <input type="text" readonly class="form-control-plaintext"
                                                    id="staticEmail" value="{{$usuario->Edad}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-5 col-form-label">Genero</label>
                                            <div class="col-sm-7">
                                                <input type="text" readonly class="form-control-plaintext"
                                                    id="staticEmail" value="{{$usuario->Genero}}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-danger"
                                            data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                    
                  
                        <form action="{{ route('Usuarios.destroy',$usuario->id) }}" method="POST" class="formulario-eliminar"> 
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-default" id="eliminar"><i
                                    class="fas fa-trash-alt"></i></button>
                        </form>

                        <a class="btn  btn-default" href="{{ route('Usuarios.edit', $usuario->id)}}">
                            <i class="fas fa-edit"></i>
                        </a>

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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function () {
        $('#equipostabla').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            }
        });
    });
</script>



@if (Session::has('Usuario_Creado'))
<script>
   Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Usuario Creado Correactamente.',
  showConfirmButton: false,
  timer: 1500
})
</script>
@elseif(Session::has('Usuario_eliminado'))
<script>
   Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Usuario Eliminado',
  showConfirmButton: false,
  timer: 1500
})
</script>
@elseif(Session::has('Usuario_editado'))
<script>
   Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Usuario Modificado.',
  showConfirmButton: false,
  timer: 1500
})
</script>
@endif

<script>
  $('.formulario-eliminar').submit(function(e){
        e.preventDefault();
          
        Swal.fire({
        title: 'Estas seguro?',
        text: "No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Eliminarlo!'

        }).then((result) => {
        if (result.isConfirmed) {
            this.submit();
        }
        })
      }
  );

</script>


<script>
  $('.formulario').submit(function(e){
        e.preventDefault();
          
      }
  );

</script>

@stop