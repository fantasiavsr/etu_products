<nav class="navbar navbar-expand-lg navbar-dark pt-2 pb-3" style="background-color: #3a51a3">
    <div class="container">

        <a class="navbar-brand me- mt-3 fw-bolder" href="/">{{-- <img class="" src="{{ asset('image/logo_etu.png') }}" alt="" width="100%"
                height="30"> --}}ETU POLINEMA</a>

        <button class="navbar-toggler mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">

            <ul class="navbar-nav ms-2 mt-3 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="fw-bold nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="fw-bold nav-link {{ $title === 'List Produk' ? 'active' : '' }}" href="/list_products">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="fw-bold nav-link {{ $title === 'Support' ? 'active' : '' }}" href="#footer">Tentang
                        Kami</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
