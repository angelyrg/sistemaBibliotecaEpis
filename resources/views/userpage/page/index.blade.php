{{-- @include('header')

@include('footer'); --}}
<!DOCTYPE html>
<html>
<head>
    <title>Título de la página</title>
</head>
<body>
    {!! $header !!}
    
  
    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="{{asset('storage/img/img.png') }}">
        <form class="d-flex tm-search-form">
            <input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="bi bi-search"></i>
            </button>
        </form>
        
    </div>
    <h1>Bienvenido a mi página de usuario</h1>
    
    {!! $footer !!}
</body>
</html>
