@extends('layouts.main')

@section('content')
    @include('Partials.navbar')

    <div class="main">

        {{-- Section --}}
        <div class="px-4 py-5" style="background-color: #EDEFF5">
            <br>

            <div class="container pt-2 pb-5 text-center justify-content-center px-5">

                <div class="row justify-content-center text-center">
                    <h2 class="fw-bold">Produk Kami</h2>
                </div>

                <div class="row row-cols-1 row-cols-md-3 g-3 pt-5">

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

                                <img src="{{ asset('image/pdx1.jpeg') }}" class="card-img-top img-responsive" alt=""
                                    style="width: 100%;
                                    height: 20vw;
                                    object-fit: cover;">


                                <div class="card-body">
                                    <h5 class="card-title">Risol mayo yummy</h5>
                                    <p class="card-text">Risol mayo yummy memiliki produk yaitu risol mayo yang berisi
                                        telur, mayo dan beef. Bahan dasar kulitnyabyaitu tepung, telur, penyedap dan sedikit
                                        minyak untuk harganya berkisar 3000</p>
                                    <a href="/detail_produk1" class="btn rounded-pill btn-outline-dark px-4 mt-4">Detail
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col d-flex">
                        <div class="card mb-3 shadow-sm pb-3" style="max-width: 100%;">
                            <div class="row g-0">

                                <img src="{{ asset('image/pd2.jpg') }}" class="card-img-top " alt=""
                                    style="width: 100%;
                                    height: 20vw;
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

                                <img src="{{ asset('image/pd3.jpg') }}" class="card-img-top" alt=""
                                    style="width: 100%;
                                    height: 20vw;
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

                                <img src="{{ asset('image/pd4.jpg') }}" class="card-img-top" alt=""
                                    style="width: 100%;
                                    height: 20vw;
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

                                <img src="{{ asset('image/pd5.jpg') }}" class="card-img-top" alt=""
                                    style="width: 100%;
                                    height: 20vw;
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

                                <img src="{{ asset('image/pd6.jpg') }}" class="card-img-top" alt=""
                                    style="width: 100%;
                                    height: 20vw;
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
