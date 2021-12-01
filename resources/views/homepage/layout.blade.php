<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Buana Gemilang Sukses</title>
    <!-- Scripts -->
    <script src="https://use.fontawesome.com/fce448f006.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <nav class="navbar navbar-inverse navbar-fixed-top navbar-expand-lg navbar-light bg-white" style="">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/logo.png') }}" alt="" width="70" height="70">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{(request()->is('/*')) ? 'active' : ""}}" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{(request()->is('tentangkami*')) ? 'active' : ""}}" href="{{ route('user.tentangkami') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{(request()->is('layanan*')) ? 'active' : ""}}" href="{{ route('user.layanan') }}">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{(request()->is('kontak*')) ? 'active' : ""}}" href="{{ route('user.kontak') }}">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</head>

<body>
    @section('content')
    @show
    <footer>
            <div class="isi">
                <div class="row">
                    <div class="logo col-12 col-md-4">
                        <img src="{{ asset('assets/logo.png') }}"alt="" style="width: 130px;">
                        <p>Kepada konsumen untuk meningkatkan<br>kenyamanan dan kepercayaan konsumen</p>
                    </div>
                    <div class="navigate col-12 col-md-4">
                        <h4>Hubungi Kami</h4>
                        <li class="nav-item">
                            <a class="nav-link map" href=""><i class="fa fa-map-marker"></i><p> South Quarter Tower A, Unit D-G
                                Jl. RA Kartini Kav. 8, Cilandak Barat
                                Jakarta Selatan, 12430</p></a>
                        </li>
                        <br>
                        <li class="nav-item">
                            <a class="nav-link" href=""><i class="fa fa-phone"></i>  +62 21 311 80060</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""><i class="fa fa-envelope"></i>  buanasuksesgemilang.bsg@gmail.com</a>
                        </li>
                    </div>
                    <div class="lokasi col-12 col-md-4">
                        <h4>Lokasi</h4>
                    </div>
                </div>
            </div>
            <p class="copyright">© 2021 Buana Gemilang Sukses. All rights reserved</p>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://use.fontawesome.com/fce448f006.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/myjs.js') }}"></script>
</body>

</html>
