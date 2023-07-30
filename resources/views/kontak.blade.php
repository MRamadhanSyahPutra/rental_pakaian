<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact Us</title>
    <link rel="shortcut icon" href="{{ asset('/img/logo.PNG') }}" type="image/x-icon">

    {{-- Style --}}
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/kontak.css') }}">

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
                    <li class="nav-item" style="text-align: center;">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item " style="text-align: center;">
                        <a class="nav-link active" href="{{ url('contact') }}">Contact Us</a>
                    </li>
                    @auth
                        <li class="nav-item dropdown" style="text-align: center;">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Hi,
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endauth
                    @can('viewAny', App\Models\Category::class)
                        <li class="nav-item" style="text-align: center;">
                            <a class="nav-link " aria-current="page" href="{{ url('admin/category') }}">Dashboard</a>
                        </li>
                    @endcan
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="lapisan-konten">
            <div class="isi-kontent">
                <div class="judul-contact">
                    <h1><i>Contact us</i></h1>
                </div>
                <div class="lapisan-kontak">
                    <div class="lapisan-kontak1">
                        <div class="desk-kontak1">
                            <div class="lapisan-desk1">
                                <div class="foto-desk1">
                                    <img class="desk1-wa" src="{{ asset('img/kontak/logo-wa.png') }}" alt="">
                                </div>
                                <div class="talk-sanggar">
                                    <p>Talk to Sanggar Macenning</p>
                                </div>
                                <div class="desk-wa">
                                    <p id="1">Tertarik dengan barang barang di sanggar macenning? Hubungi kami
                                        dan diskusikan.</p>
                                </div>
                                <div class="button">
                                    <button class="click-me">
                                        <a id="2" href="https://wa.me/6282297591854">Click me</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lapisan-kontak2">
                        <div class="desk-kontak2">
                            <div class="lapisan-desk2">
                                <div class="foto-desk2">
                                    <img class="desk1-ig" src="{{ asset('img/kontak/logo-ig.png') }}" alt="">
                                </div>
                                <div class="talk-sanggar">
                                    <p>Explore more about Sanggar Macenning</p>
                                </div>
                                <div class="desk-wa">
                                    <p id="1">Telusuri berbagai barang, pakaian, hantaran, aksesoris yang tidak
                                        anda temukan disini. Lihat melalui Instagram resmi kami.</p>
                                </div>
                                <div class="button">
                                    <button class="click-me">
                                        <a id="2" href="https://www.instagram.com/sanggar_macenning/">Click
                                            me</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>

</body>

</html>
