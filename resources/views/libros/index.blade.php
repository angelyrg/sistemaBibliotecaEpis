@extends('adminlte::page')

@section('title', 'Dashboard')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
@endsection


@section('content')
{{--<a href="{{url('libros/create')}}" class="btn bg-gradient-info text-white my-2"> Registrar nuevo libro</a>

<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="w-100 table table-sm table-striped table-bordered" id="libros">
                <thead class="bg-gradient-info text-center">
                    <tr>
                        <td>Imagen</td>
                        <td>Dewey</td>
                        <td>Titulo</td>
                        <td>Autor</td>
                        <td>Editorial</td>
                        <td>Estado</td>
                        <td>Stock</td>
                        <td>Formato</td>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($libros as $lib)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/'.$lib->imagen) }}" alt="" width="100" height="100">
                        </td>
                        <td>{{ $lib->dewey }}</td>
                        <td>{{ $lib->titulo }}</td>
                        <td>{{ $lib->autor }}</td>
                        <td>{{ $lib->editorial }}</td>
                        <td>{{ $lib->estado }}</td>
                        <td>{{ $lib->stock }}</td>
                        <td>{{ $lib->formato }}</td>
                        <td>
                            <div style="display: flex; align-items: center;" >
                                <a href="{{ url('/libros/'.$lib->id.'/edit')}}" class="btn bg-gradient-success" style="margin-right: 10px;"><i class="fas fa-sync"></i></a>
                                <form action="{{url('/libros/'.$lib->id)}}" method="post">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button type="submit" onclick="return confirm('¿Quieres borrar?')" class="btn bg-gradient-danger "  > <i class='fas fa-trash'></i>
                                    </button>
                                </form>
                            </div>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>--}}
<div class="container-fluid py-5">
    <div class="card card-danger card-outline">
        <div class="card-header">
            <h3 class="card-title">Lista de libros</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-2 my-3">

                    <a href="{{ url('libros/create') }}" class="btn btn-block btn-outline-primary "> <i class="fas fa-plus"></i> Registrar libro<i class="bi bi-person-fill-add"></i></a>

                </div>

                <div class="col-md-12 justify-content-center">
                    <table
                        class="table table-sm table-striped   table-full-width table-hover align-middle"
                        id="libros">
                        <thead class="bg-gradient-danger text-center">
                            <tr>
                                <td>Imagen</td>
                                <td>Dewey</td>
                                <td>Titulo</td>
                                <td>Autor</td>
                                <td>Editorial</td>
                                <td>Estado</td>
                                <td>Stock</td>
                                <td>Formato</td>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($libros as $lib)
                            <tr>
                                <td>
                                    <img src="{{ asset("/storage/libros/".$lib->imagen) }}" alt="" width="100" height="100">                        </td>
                                <td>{{ $lib->dewey }}</td>
                                <td>{{ $lib->titulo }}</td>
                                <td>{{ $lib->autor }}</td>
                                <td>{{ $lib->editorial }}</td>
                                <td>{{ $lib->estado }}</td>
                                <td>{{ $lib->stock }}</td>
                                <td>{{ $lib->formato }}</td>
                                <td>
                                    <div style="display: flex; align-items: center;" >
                                        <a href="{{ url('/libros/'.$lib->id.'/edit')}}" class="btn bg-gradient-primary" style="margin-right: 10px;"><i class="fas fa-sync"></i>Editar</a>
                                        <form action="{{url('/libros/'.$lib->id)}}" method="post">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button type="submit" onclick="return confirm('¿Quieres borrar?')" class="btn bg-gradient-warning "  > <i class='fas fa-trash'></i>Eliminar
                                            </button>
                                        </form>
                                    </div>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $('#libros').DataTable({
        //"scrollY": "500px", // Altura máxima de la tabla
        //"scrollCollapse": true,
        //para cambiar el lenguaje a español
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "sProcessing": "Procesando...",
        }
    });
    </script>
@stop
