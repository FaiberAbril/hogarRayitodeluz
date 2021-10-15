@extends('adminlte::page')

@section('title', 'Consulta Medica')

@section('content_header')  
    <h1>Nombre del Usuario :</h1>
    <h1>{{$usuario->Nombres}} {{$usuario->Apellidos}}</h1>
    <h1> C.C : {{$usuario->Cedula}}</h1>
@stop

@section('content')



    <a class="btn btn-app bg-primary formulario" href="{{ route('ConsultaDiariaCrear.crear',$usuario->id) }}" >
        <i class="fas fa-plus"></i> Realizar Registro
    </a>



    <div class="card card-primary">
        <div class="card-header">
            <h2 class="card-title">Registro de datos diario</h2>
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
                        <th scope="col">Acciones</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($consultaDiaria as $consulta)
                    <tr>
                        <td>{{$consulta->Temperatura}}</td>
                        <td>{{$consulta->PesoCorporal}}</td>
                        <td>{{$consulta->PulsoCardiaco}}</td>
                        <td>{{$consulta->FechaConsulta}}</td>
                        <td>
                        <form action="{{ route('ConsultaDiaria.destroy',$consulta->id) }}" class="formulario-eliminar" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-default " id="eliminar"><i class="fas fa-trash-alt"></i></button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <a class="btn btn-app bg-primary" href="/Usuarios">
     <span class="badge bg-green"></span><i class="fas fa-arrow-circle-left"></i> Volver
      </a>

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
$(document).ready(function() {
  $('#equipostabla').DataTable({
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    },"order": [[ 0, "desc" ]]
  });
  $('.dataTables_filterinput[type="search"]').css(
     {'width':'350px','display':'inline-block'}
  );

});

</script>

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

@if (Session::has('Usuario_Creado'))
<script>
   Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Registro diario Creado Correactamente.',
  showConfirmButton: false,
  timer: 1500
})
</script>
@elseif(Session::has('Consulta_Eliminada'))
<script>
   Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Registro diario Eliminado Correactamente.',
  showConfirmButton: false,
  timer: 1500
})
</script>
@endif

@stop