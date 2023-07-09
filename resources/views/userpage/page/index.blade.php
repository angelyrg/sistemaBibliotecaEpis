{{-- @include('header')

@include('footer'); --}}

{!! $header !!}


<div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll"
    data-image-src="{{ asset('storage/img/img.png') }}">
    <form class="d-flex tm-search-form">
        <input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success tm-search-btn" type="submit">
            <i class="bi bi-search"></i>
        </button>
    </form>

</div>
<div class="container-fluid p-4 my-3 tm-container-content border tm-mt-60">
    <div class="row mb-4">
        <h2 class="col-6 tm-text-primary">
            Lista de libros actualizados de la EPIS
        </h2>
        <div class="col-6 d-flex justify-content-end align-items-center">
            <form action="" class="tm-text-primary">
                Page <input type="text" value="1" size="1" class="tm-input-paging tm-text-primary"> de 200
            </form>
        </div>
    </div>

        <div class="row tm-mb-90 tm-gallery">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-5 shadow border m-1">
                        <figure class="effect-ming tm-video-item m-2">
                            <img src="{{ asset('storage/uploads/C5DZGHInMV2He6FCGjaOQW8rLW1dkcryY1pNvZe7.jpg') }}"
                                alt="Image" class="img-fluid">
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Clocks</h2>
                                <a href="photo-detail.html">View more</a>
                            </figcaption>
                        </figure>
                        <div class="d-flex justify-content-between tm-text-gray">
                            <span class="tm-text-gray-light">18 Oct 2020</span>
                            <span>9,906 views</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-5 shadow border m-1">
                        <figure class="effect-ming tm-video-item m-2">
                            <img src="{{ asset('storage/uploads/C5DZGHInMV2He6FCGjaOQW8rLW1dkcryY1pNvZe7.jpg') }}"
                                alt="Image" class="img-fluid">
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Clocks</h2>
                                <a href="photo-detail.html">View more</a>
                            </figcaption>
                        </figure>
                        <div class="d-flex justify-content-between tm-text-gray">
                            <span class="tm-text-gray-light">18 Oct 2020</span>
                            <span>9,906 views</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-5 shadow border m-1">
                        <figure class="effect-ming tm-video-item m-2">
                            <img src="{{ asset('storage/uploads/C5DZGHInMV2He6FCGjaOQW8rLW1dkcryY1pNvZe7.jpg') }}"
                                alt="Image" class="img-fluid">
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Clocks</h2>
                                <a href="photo-detail.html">View more</a>
                            </figcaption>
                        </figure>
                        <div class="d-flex justify-content-between tm-text-gray">
                            <span class="tm-text-gray-light">18 Oct 2020</span>
                            <span>9,906 views</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-5 shadow border m-1">
                        <figure class="effect-ming tm-video-item m-2">
                            <img src="{{ asset('storage/uploads/C5DZGHInMV2He6FCGjaOQW8rLW1dkcryY1pNvZe7.jpg') }}"
                                alt="Image" class="img-fluid">
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Clocks</h2>
                                <a href="photo-detail.html">View more</a>
                            </figcaption>
                        </figure>
                        <div class="d-flex justify-content-between tm-text-gray">
                            <span class="tm-text-gray-light">18 Oct 2020</span>
                            <span>9,906 views</span>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    {!! $footer !!}
