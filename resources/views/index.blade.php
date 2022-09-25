@extends('layouts.main')

@section('content')
    @include('Partials.navbar')

    <div class="main">

        {{-- HERO --}}
        <div class="text-secondary px-4 py-5 text-center bg-cover" {{-- style="background-color: #30445C" --}}
            style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url({{ URL::asset('image/hero_image.jpg') }});
            background-size: cover;">
            <div class="py-5">
                <img src="{{ asset('image/logo_etu.png') }}" class="img-fluid pb-5" alt="" style="width: 170px">
                <h1 class="display-5 fw-bold text-white pb-3">ETU POLINEMA</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="fs-5 mb-4 text-light">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum quisquam voluptas eaque modi
                        necessitatibus, consectetur amet veniam quam eligendi minima ea laudantium, at fugiat sapiente
                        quaerat sint corporis! Voluptate, a!
                    </p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center pt-4">
                        <a href="">
                            <button type="button"
                                class="btn btn-lg rounded-pill btn-outline-light px-4 me-sm-3">Button</button>
                        </a>
                        {{-- <a href="/courseList">
                            <button type="button" class="btn btn-lg rounded-pill btn-dark px-4">Course List</button>
                        </a> --}}
                    </div>
                </div>
            </div>
            {{-- <div class="ratio ratio-16x9">
                <iframe class="" src="uploads/1. TI-2A.pdf" allowfullscreen></iframe>
            </div> --}}
            <br><br>
        </div>


        {{-- Section --}}
        <div class="px-4 py-5" style="background-color: #EDEFF5">
            <br><br>

            <div class="container pt-5 pb-5">

                <div class="justify-content-center">
                    {{-- <div class="card-group gap-4"> --}}
                    <div class="d-grid gap-5 d-sm-flex justify-content-sm-center pt-4">

                        <div class="col-md-4 pe-1">
                            <img class="img-fluid w-100" src="{{ asset('img/home-2.png') }}" alt="">
                        </div>
                        <div class="col-md-5 ps-4">
                            <h3 class="col-md-11 display-6 fw-bold text-dark pb-2">Lorem, ipsum dolor sit</h3>
                            <p class="fs-5 fw-light mb-4 text-dark">Lorem, ipsum dolor sit amet consectetur adipisicing
                                elit. Ipsum quisquam voluptas eaque modi
                                necessitatibus, consectetur amet veniam quam eligendi minima ea laudantium, at fugiat
                                sapiente
                                quaerat sint corporis! Voluptate, a!
                            </p>
                        </div>

                    </div>

                </div>

            </div>

            <br><br><br>
        </div>

        {{-- Section --}}
        <div class="px-4 py-5" style="background-color: #F9FAFC">
            <br><br>

            <div class="container pt-5 pb-5">

                <div class="justify-content-center">
                    {{-- <div class="card-group gap-4"> --}}
                    <div class="d-grid gap-5 d-sm-flex justify-content-sm-center pt-4">

                        <div class="col-md-5 pe-1">
                            <h3 class="col-md-11 display-6 fw-bold text-dark pb-2">Lorem, ipsum dolor sit</h3>
                            <p class="fs-5 fw-light mb-4 text-dark">Lorem, ipsum dolor sit amet consectetur adipisicing
                                elit. Ipsum quisquam voluptas eaque modi
                                necessitatibus, consectetur amet veniam quam eligendi minima ea laudantium, at fugiat
                                sapiente
                                quaerat sint corporis! Voluptate, a!
                            </p>
                        </div>
                        <div class="col-md-4 ps-4">
                            <img class="img-fluid w-100" src="{{ asset('img/home-1.png') }}" alt="">
                        </div>

                    </div>

                </div>

            </div>

            <br><br><br>
        </div>

        {{-- Section --}}
        <div class="px-4 py-5" style="background-color: #EDEFF5">
            <br>

            <div class="container pt-5 pb-5 text-center justify-content-center px-5">

                <div class="row justify-content-center text-center pt-3">
                    <h2 class="fw-bold">Produk Kami</h2>
                </div>



                <div class="row row-cols-1 row-cols-md-2 g-3 pt-5">

                    {{-- @foreach ($data->slice(0, 4) as $data)
                        <div class="col">
                            <div class="card mb-3 shadow-sm pb-3" style="max-width: 100%;">
                                <div class="row g-0">

                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLHSPbCQQn7P_8H2JhX2CodrqLYG_ABgdJpw&usqp=CAU"
                                        class="card-img-top" alt=""">


                                    <div class="card-body">
                                        <h5 class="card-title">{{ $data->name }}</h5>
                                        <p class="card-text">{{ $data->desc }}</p>
                                        <a href="" class="btn rounded-pill me-4 btn-outline-dark px-4 mt-4">Detail
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach --}}

                    <div class="col d-flex">
                        <div class="card mb-3 shadow-sm pb-3" style="max-width: 100%;">
                            <div class="row g-0">

                                <img src="{{ asset('image/pd1.jpg') }}" class="card-img-top img-responsive" alt=""
                                    style="width: 100%;
                                    height: 15vw;
                                    object-fit: cover;">


                                <div class="card-body">
                                    <h5 class="card-title">Nama Produk</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic vero
                                        aliquam nostrum, laudantium incidunt modi eos sed</p>
                                    <a href="" class="btn rounded-pill btn-outline-dark px-4 mt-4">Detail
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col d-flex">
                        <div class="card mb-3 shadow-sm pb-3" style="max-width: 100%;">
                            <div class="row g-0">

                                <img src="{{ asset('image/pd2.jpg') }}"
                                    class="card-img-top " alt=""
                                    style="width: 100%;
                                    height: 15vw;
                                    object-fit: cover;">


                                <div class="card-body">
                                    <h5 class="card-title">Nama Produk</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic vero
                                        aliquam nostrum, laudantium incidunt modi eos sed</p>
                                    <a href="" class="btn rounded-pill btn-outline-dark px-4 mt-4">Detail
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col d-flex">
                        <div class="card mb-3 shadow-sm pb-3" style="max-width: 100%;">
                            <div class="row g-0">

                                <img src="{{ asset('image/pd3.jpg') }}"
                                    class="card-img-top" alt="" style="width: 100%;
                                    height: 15vw;
                                    object-fit: cover;">


                                <div class="card-body">
                                    <h5 class="card-title">Nama Produk</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic vero
                                        aliquam nostrum, laudantium incidunt modi eos sed</p>
                                    <a href="" class="btn rounded-pill btn-outline-dark px-4 mt-4">Detail
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col d-flex">
                        <div class="card mb-3 shadow-sm pb-3" style="max-width: 100%;">
                            <div class="row g-0">

                                <img src="{{ asset('image/pd4.jpg') }}"
                                    class="card-img-top" alt="" style="width: 100%;
                                    height: 15vw;
                                    object-fit: cover;">


                                <div class="card-body">
                                    <h5 class="card-title">Nama Produk</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic vero
                                        aliquam nostrum, laudantium incidunt modi eos sed</p>
                                    <a href="" class="btn rounded-pill btn-outline-dark px-4 mt-4">Detail
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                {{-- <div class="row justify-content-center text-center pt-3">
                    <h2 class="fw-bold">Ready to Join Us?</h2>
                </div>

                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center pt-4 text-center">
                    <a href="">
                        <button type="button"
                            class="btn btn-md rounded-pill px-4 py-3 me-sm-3 text-light fw-bold shadow-custom-green   "
                            style="background-color: #3a51a3;">Button</button>
                    </a>

                </div> --}}

            </div>


        </div>

    </div>

    @include('Partials.footer')
@endsection
