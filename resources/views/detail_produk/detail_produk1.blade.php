@extends('layouts.main')

@section('content')
    @include('Partials.navbar')

    <div class="main">

        {{-- HERO --}}
        <div class="text-secondary px-4 pt-2 pb-2 sticky-top"
        style="background-color: #3a51a3;">

            <div class="container px-1">
                <div class="row align-items-center mt-5 mb-3">
                    <div class="d-flex gap-3 d-sm-flex">
                        <img class="img-fluid" style="height:60px" src="{{ asset('image/pdx1logo.png') }}" alt="">
                        <h1 class="display-5 fw-bold text-white">Risol mayo yummy</h1>
                    </div>
                </div>
            </div>

        </div>

        <div class="px-2 py-3">

            {{-- Desc --}}
            <div class="container">

                <div class="text-center align-items-center mb-3 pb-2">
                    <div class="row g-0 text-center align-items-center">
                        <img src="{{ asset('image/pdx1.jpeg') }}" class="img-responsive text-center align-items-center" alt=""
                            style="width: 100%;
                            height: 20vw;
                            object-fit: cover;">
                    </div>
                </div>

                <hr>

                <div class="row pt-2">
                    <div class="col">
                        <h2 class="fw-bold">Deskripsi</h2>
                    </div>
                    <div class="col">
                        <p>Risol mayo yummy memiliki produk yaitu risol mayo yang berisi telur, mayo dan beef. Bahan dasar
                            kulitnya yaitu tepung, telur, penyedap dan sedikit minyak untuk harganya berkisar 3000</p>
                    </div>
                </div>
                <br><br><br>

                <hr>

                <div class="row">
                    <div class="col">
                        <h2 class="fw-bold">Bahan</h2>
                    </div>
                    <div class="col">
                        <p>Tepung, Telur, Penyedap, Harga</p>
                    </div>
                </div>
                <br><br><br>

                <hr>

                <div class="row">
                    <div class="col">
                        <h2 class="fw-bold">Harga</h2>
                    </div>
                    <div class="col">
                        <p>Rp. 3000</p>
                    </div>
                </div>
                <br><br><br>

        </div>

    </div>

    @include('Partials.footer')
@endsection
