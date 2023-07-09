@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    {{-- <a href="{{ url('users/create') }}" class="btn btn-success my-2"> Registrar nuevo usuario<i class="bi bi-person-fill-add"></i></a>
    <div class="row">
        <div class="card-body">
            <div class="">
                <table class="w-100 table table-sm table-striped table-bordered" id="users">
                    <thead class="bg-gradient-info text-center">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>DNI</th>
                            <th>Correo</th>
                            <th>Tipo de usuario</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $user)
                            <tr>
                                <td>{{ $user->nombre }}</td>
                                <td>{{ $user->apellido }}</td>
                                <td>{{ $user->dni }}</td>
                                <td>{{ $user->correo }}</td>
                                <td>{{ $user->type_user }}</td>
                                <td>
                                    <div style="display: flex; align-items: center;">
                                        <a href="{{ url('/users/' . $user->id . '/edit') }}" class="btn btn-primary"
                                            style="margin-right: 10px;"><i class="fas fa-sync"></i>Editar</a>
                                        <form action="{{ url('/users/' . $user->id) }}" method="post">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" onclick="return confirm('¿Quieres borrar?')"
                                                class="btn btn-danger "> <i class='fas fa-trash'></i> ELiminar
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
    </div> --}}



    <div class="container-fluid py-5">
        <div class="card card-danger card-outline">
            <div class="card-header">
                <h3 class="card-title">Lista de usuarios</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2 my-3">
                        
                        <a href="{{ route('register') }}" class="btn btn-block btn-outline-primary "> <i class="fas fa-plus"></i> Registrar usuario<i class="bi bi-person-fill-add"></i></a>

                    </div>

                    <div class="col-md-12 justify-content-center">
                        <table
                            class="table table-sm table-striped   table-full-width table-hover align-middle"
                            id="users">
                            <thead class="bg-gradient-danger text-center">
                                <tr>
                                    <th>#</th>
                                    <th>Apellido y Nombre</th>
                                    <th>DNI</th>
                                    <th>Correo</th>
                                    <th>Tipo de usuario</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usuarios as $user)
                                    <tr>
                                         <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->dni }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->type_user }}</td>
                                        <td>
                                            <div style="display: flex; align-items: center;">
                                                <a href="{{ url('/users/' . $user->id . '/edit') }}" class="btn btn-primary"
                                                    style="margin-right: 10px;"><i class="fas fa-sync"></i>Editar</a>
                                                    <form action="{{ url('/users/' . $user->id) }}" method="post" id="deleteForm{{ $user->id }}">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-warning eliminar" onclick="deleteUser({{ $user->id }})">
                                                            <i class='fas fa-trash'></i> Eliminar
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

@section('js')

<script>
    function deleteUser(userId) {
        event.preventDefault(); // prevent the form from submitting normally
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, elimínalo!'
        }).then((result) => {
            if (result.isConfirmed) {
                // submit the form if the user confirms
                $('#deleteForm' + userId).off('submit').submit();
                Swal.fire(
                    '¡Eliminado!',
                    'Tu archivo ha sido eliminado.',
                    'success'
                )
            }
        });
    }
</script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $('#users').DataTable({
            "scrollY": "350px", // Altura máxima de la tabla
            "scrollCollapse": true,
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
