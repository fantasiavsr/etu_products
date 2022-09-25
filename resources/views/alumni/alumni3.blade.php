@extends('layouts.main')

@section('content')
    @include('Partials.navbar')

    <div class="main">

        {{-- HERO --}}
        <div class="text-secondary px-4 pt-2 pb-2" style="background-color: #3a51a3;">

            <div class="container px-1">
                <div class="row align-items-center">
                    <div class="col-lg-6 d-flex gap-3">
                        <img class="avatar rounded-circle mb-4 mt-5" src="{{ asset('image/' . $data->logo) }}" alt=""
                            style="width:60x; height:60px">
                        <h1 class="display-5 fw-bold text-white mb-4 mt-5">{{ $data->nama }}</h1>
                    </div>
                    <div class="col">
                        <div class="float-end">
                            <a href="{{ $data->sosmed }}" target="_blank">
                                <button type="button"
                                    class="btn btn-lg rounded-pill btn-outline-light px-4 me-sm-3 mb-4 mt-5">
                                    Kunjungi Sosmed/Toko
                                </button>
                            </a>
                            {{-- <a href="#">
                                <button type="button" class="btn btn-lg rounded-pill btn-dark px-4">Course List</button>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="px-2 py-3">

            {{-- Desc --}}
            <div class="container">

                <div class="text-center align-items-center mb-3 pb-2">
                    <div class="row g-0 text-center align-items-center">
                        <img src="{{ asset('image/' . $data->gambar) }}"
                            class="img-responsive text-center align-items-center" alt=""
                            style="width: 100%;
                            height: 20vw;
                            object-fit: cover;">
                    </div>
                </div>

                <div class="text-center align-items-center mb-3 pb-2">
                    <div class="row g-0 text-center align-items-center">
                        <img src="{{ asset('image/pdx15-1.jpeg') }}"
                            class="img-responsive text-center align-items-center" alt=""
                            style="width: 100%;
                            height: 70vw;
                            object-fit: cover;">
                    </div>
                </div>

            </div>

        </div>

        @include('Partials.footer')
    @endsection
