@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">Actualizar usuarios</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-5 mx-auto border py-2">
            <form action="{{url('/users/'.$usuarios->id)}}" method="post">
                @csrf
                {{method_field('PATCH')}}
<<<<<<< HEAD
                @include('users.show')
=======
                @include('users.show',['mode'=>'Actualizar'])
>>>>>>> ce7cfa5646d991a342ff90a3db51bd484de5b088
            </form>
        </div>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
