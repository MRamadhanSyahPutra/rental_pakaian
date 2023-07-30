<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sanggar Macenning</title>
    <link rel="shortcut icon" href="{{ asset('/img/logo.PNG') }}" type="image/x-icon">

    {{-- Style --}}
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style-welcome.css') }}">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top" style="background-color: #401d35;">
        <div class="container">
            <div class="logo-1">
                <img class="img-fluid" src="{{ asset('/img/logo-1.png') }}" alt="" width="56">
            </div>
            <a class="navbar-brand" href="#">
                <h3>Sanggar Macenning</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">

                    @if (Route::has('login'))

                        @auth
                            <li class="nav-item" style="text-align: center;">
                                <a class="nav-link " aria-current="page" href="{{ url('/home') }}">Home</a>
                            </li>
                        @else
                            <li class="nav-item" style="text-align: center;">
                                <a class="nav-link " aria-current="page" href="{{ route('login') }}">Log in</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item" style="text-align: center;">
                                    <a class="nav-link " aria-current="page" href="{{ route('register') }}">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="judul-welcome">
            <h1><i>Selamat datang di Sanggar Macenning</i></h1>
        </div>
        <div class="isi-kontent">
            <div class="lapisan-welcome">
                <div class="foto-welcome">
                    <img class="welcome" src="{{ asset('img/welcome/img-1.png') }}" alt="">
                </div>
                <div class="deskripsi-welcome">
                    <div class="deskripsi-judul-welcome">
                        <h2><i>Sanggar Macenning</i></h2>
                    </div>
                    <div class="deskripsi-welcome1">
                        <p>Tempat penyewaan pakaian adat bugis untuk acara pernikahan dan sebagainya. Ada banyak yang
                            di
                            seduakan mulai dari Pakaian Wanita dan Pria, Baju Bodo, Baju Anak, Jas Tutup, Mapacci, dan
                            Hantaran. Dan juga menyediakan jasa MUA atau Make Up Artist.
                        </p>
                    </div>
                    <div class="deskripsi-welcome2">
                        <p>Sanggar Macenning ini berada di Batu Ampar, Tg. Sengkuang. jika ingin melihat-lihat apa saja
                            yang di rentalkan bisa mengunjungi website ini akan tetapi perlu melakukan login terlebih
                            dahulu
                            jika ingin membuat perjanjian kepada penyewa rentalan bisa menghubungi Contact Us dan akan
                            langsung di tuju ke Instagram ataupun Whatsapp penyewa rental. Karna Website ini bersifat
                            Katalog
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>

</body>

</html>
