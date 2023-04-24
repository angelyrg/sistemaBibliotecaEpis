<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Biblioteca EPIS</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</head>

<body>
    <!-- VENTANA DE INICIO GENERAL -->
    <header class="cabecera">
        <div class="cabecera__fondo--nitido"></div>
        <div class="cabecera__capa"></div>
        <div class="cabecera__contenido">
            <img src="" alt="Funcion 13 Logo" class="logo">

            <img height="80px" src="{{ asset('storage' . '/' . 'img/epis.png') }}" alt="">
            <h1>SISTEMA DE BIBLIOTECA</h1>
            <p>Escuela Profesional de Ingenieria de Sistemas</p>
        </div>
        <!--AQUI TENDREMOS DIFERENTES LISTAS DE MENU DE VENTANA DE INICIO-->
        <nav class="nav">
            <div class="nav__columna nav__pull"></div>
            <ul class="nav__columna nav__enlaces">
                <li><a href="#">Inicio</a></li>
                <li><a href="https://goo.gl/maps/YGddP8BJ74DW9uu5A" target="_blank">Ubicación</a></li>
                <li><a href="https://sistemas.unh.edu.pe/" target="_blank">Contactenos</a></li>
                <li class="dropdown" style="color: white">
                    <span>Ingresar
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                    </span>
                    <ul>

                        <li class="">
                            <a href="{{ route('login') }}" class="p-4"> Login</a>
                        </li>
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#addprofile"
                            style="color: white">
                            Administrador
                        </button>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <section class="section1-center">
        <br><br><br><br>
        <div class="cont-video-bg" style="position:relative; width: 100%; top: 0; left: 0">
            <video autoplay muted loop id="myVideo" style="min-width: 100%">
                <source src="{{asset('storage/img/libros_comprimido(1080)(2).mp4') }}" type="video/mp4">
            </video>
        </div>
    </section>

    <!-- MODAL PARA EL LOGEO DEL ADMINISTRADOR -->
    <div class="modal fade" id="addprofile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        style="color: black;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content img_log">

                <div class="modal-header ">

                    <h5 class="modal-title" id="exampleModalLabel">ADMINISTRADOR </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @section('content')
                        {{-- <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">{{ __('Login') }}</div> --}}

                                        <div class="card-body border">
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf

                                                <div class="row mb-3">
                                                    <label for="email"
                                                        class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="email" type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email" value="{{ old('email') }}" required
                                                            autocomplete="email" autofocus>

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="password"
                                                        class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="password" type="password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            name="password" required autocomplete="current-password">

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-6 offset-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="remember" id="remember"
                                                                {{ old('remember') ? 'checked' : '' }}>

                                                            <label class="form-check-label" for="remember">
                                                                {{ __('Remember Me') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-0">
                                                    <div class="col-md-8 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Login') }}
                                                        </button>

                                                        @if (Route::has('password.request'))
                                                            <a class="btn btn-link"
                                                                href="{{ route('password.request') }}">
                                                                {{ __('Forgot Your Password?') }}
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    {{-- </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>

    </body>
    <!-- PIE DE PAGINA DE INICIO -->
    <footer class="pie_pagina">
        <center>
            <p>©Copyright 2050 EQUIPO 4. Todos los derechos reservados.</p>
        </center>
    </footer>
    <script>
        document.querySelector(".dropdown").addEventListener("click",
            function() {
                document.querySelector("dropdown ul").classList.add("show")
            });
    </script>

 

    </html>
