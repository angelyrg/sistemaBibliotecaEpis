@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">Actualizar libros</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-5 mx-auto border py-2">
            <form action="{{url('/libros/'.$libros->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                {{method_field('PATCH')}}
                @include('libros.form', ['modo'=>'Actualizar'])
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
