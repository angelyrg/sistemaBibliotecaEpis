@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de usuarios </h1>
@stop

@section('content')
<a href="{{url('users/create')}}" class="btn btn-success my-2"> Registrar nuevo usuario</a>
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
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
            @foreach($usuarios as $user)
            <tr>
                <td>{{ $user->nombre }}</td>
                <td>{{ $user->apellido }}</td>
                <td>{{ $user->dni }}</td>
                <td>{{ $user->correo }}</td>
                <td>{{ $user->type_user }}</td>
                <td>
                    <div style="display: flex; align-items: center;" >
                        <a href="{{ url('/users/'.$user->id.'/edit')}}" class="btn btn-primary" style="margin-right: 10px;"><i class="fas fa-sync"></i>Editar</a>
                        <form action="{{url('/users/'.$user->id)}}" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit" onclick="return confirm('¿Quieres borrar?')" class="btn btn-danger "  > <i class='fas fa-trash'></i> ELiminar
                            </button>
                        </form>
                    </div>
<<<<<<< HEAD

=======
                    
>>>>>>> ce7cfa5646d991a342ff90a3db51bd484de5b088
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
