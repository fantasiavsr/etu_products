@extends('layouts.main')

@section('content')
    @include('Partials.navbar')

    <div class="main">

        {{-- HERO --}}
        <div class="text-secondary px-4 py-5 text-center bg-cover" {{-- style="background-color: #30445C" --}}
            style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url({{ URL::asset('image/hero_etu.png') }});
            background-size: cover;">
            <div class="py-5">
                <img src="{{ asset('image/logo_etu.png') }}" class="img-fluid pb-5" alt="" style="width: 170px">
                <h1 class="display-5 fw-bold text-white pb-3">ETU POLINEMA</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="fs-5 mb-4 text-light">
                        Entrepeneurship Training Unit (ETU) sebagai unit pengelola kewirausahaan bertugas memfasilitasi
                        semua kegiatan kewirausahaan mahasiswa yang terdiri dari pendidikan, pelatihan, seminar, pemberian
                        modal usaha, konsultasi hingga pendampingan usaha.
                    </p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center pt-4">
                        <a href="#produkKami">
                            <button type="button" class="btn btn-lg rounded-pill btn-outline-light px-4 me-sm-3">Lihat
                                Produk Kami</button>
                        </a>
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
                            <img class="img-fluid w-100" src="{{ asset('image/home1.jpg') }}" alt="">
                        </div>
                        <div class="col-md-5 ps-4">
                            <h3 class="col-md-11 display-6 fw-bold text-dark pb-2">Jiwa Kewirausahaan</h3>
                            <p class="fs-5 fw-light mb-4 text-dark">Berupaya mengembangkan paradigma berfikir lulusan dari
                                sebagai pencari kerja menjadi pencipta kerja, yang tertuang dalam salah satu visi polinema
                                “Menciptakan suasana akademik yang kondusif untuk meningkatkan mutu sumber daya manusia dan
                                pembelajaran yang mendorong pola pembelajaran yang mendorong pola pembelajaran seumur hidup
                                dan tumbuhnya jiwa kewirausahaan.
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
                            <h3 class="col-md-11 display-6 fw-bold text-dark pb-2">Pelatihan Wirausaha</h3>
                            <p class="fs-5 fw-light mb-4 text-dark">Seiring dengan berjalannya waktu, kegiatan yang di
                                kelola ETU semakin luas. Saat ini ETU juga mengelola posdaya, menjadi konsultan UMKM binaan
                                posdaya
                                polinema dan bekerja sama dengan beberapa institusi pemerintah untuk memberikan pelatihan.
                            </p>
                        </div>
                        <div class="col-md-4 ps-4">
                            <img class="img-fluid w-100" src="{{ asset('image/home2.jpg') }}" alt="">
                        </div>

                    </div>

                </div>

            </div>

            <br><br><br>
        </div>

        {{-- Section --}}
        <div class="px-4 py-5" style="background-color: #EDEFF5">
            <br>

            <div class="container pt-5 pb-5 justify-content-center px-5" id="produkKami">

                <div class="d-sm-flex align-items-center justify-content-between">
                    <h2 class="fw-bold">Produk Kami</h2>
                    <a href="/list_products" class="">
                        <button class="btn btn-outline-primary btn-lg">
                            Lihat Semua
                        </button>
                    </a>
                </div>


                <div class="row row-cols-1 row-cols-md-2 g-3 pt-5 text-center"">

                    @foreach ($data->slice(0, 4) as $data)
                        <div class="col d-flex">
                            <div class="card mb-3 shadow-sm pb-3" style="max-width: 100%;">
                                <div class="row g-0">

                                    <img src="{{ asset('image/' . $data->gambar) }}" class="card-img-top img-responsive"
                                        alt=""
                                        style="width: 100%;
                                    height: 20vw;
                                    object-fit: cover;">


                                    <div class="card-body">
                                        <h5 class="card-title">{{ $data->nama }}</h5>
                                        <p class="card-text">{{ $data->desk }}</p>
                                        <a href="{{ route('detail_produk', ['id' => $data->id]) }}"
                                            class="btn rounded-pill btn-outline-dark px-4 mt-4">Detail
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="col d-flex">
                        <div class="card mb-3 shadow-sm pb-3" style="max-width: 100%;">
                            <div class="row g-0">

                                <img src="{{ asset('image/pd1.jpg') }}" class="card-img-top img-responsive" alt=""
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
                    </div> --}}

                    {{-- <div class="col d-flex">
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
                    </div> --}}

                    {{-- <div class="col d-flex">
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
 --}}
                    {{-- <div class="col d-flex">
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
                    </div> --}}

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
