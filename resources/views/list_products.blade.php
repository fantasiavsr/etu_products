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

                    @foreach ($data as $data)
                        <div class="col d-flex">
                            <div class="card mb-3 shadow-sm pb-3" style="max-width: 100%;">
                                <div class="row g-0">

                                    <img src="{{ asset('image/' . $data->gambar) }}" class="card-img-top" alt=""
                                        style="width: 100%;
                                    height: 20vw;
                                    object-fit: cover;">

                                    <div class="card-body">
                                        <h5 class="card-title">{{ $data->nama }}</h5>
                                        <p class="card-text">{{ $data->desk }}</p>
                                        <a href="{{ route('detail_produk', ['id' => $data->id]) }}" class="btn rounded-pill me-4 btn-outline-dark px-4 mt-4">Detail
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="row justify-content-center text-center pt-5">
                    <h2 class="fw-bold">Alumni PMW</h2>
                </div>

                <div class="row row-cols-1 row-cols-md-3 g-3 pt-5">

                    @foreach ($data2 as $data)
                        <div class="col d-flex">
                            <div class="card mb-3 shadow-sm pb-3" style="max-width: 100%;">
                                <div class="row g-0">

                                    <img src="{{ asset('image/' . $data->gambar) }}" class="card-img-top" alt=""
                                        style="width: 100%;
                                    height: 20vw;
                                    object-fit: cover;">

                                    <div class="card-body">
                                        <h5 class="card-title">{{ $data->nama }}</h5>
                                        <p class="card-text">{{ $data->desk }}</p>
                                        <a href="{{ '/alumni'.$data->id }}" class="btn rounded-pill me-4 btn-outline-dark px-4 mt-4">Detail
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach

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
