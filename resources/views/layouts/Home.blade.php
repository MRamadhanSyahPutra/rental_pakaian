<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Style -->
    <title>@yield('title', 'Sanggar Macenning')</title>
    <link rel="shortcut icon" href="{{ asset('/img/logo.PNG') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/css/style-rumah1.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/responsif-home.css') }}">
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/realrashid/sweet-alert/sweetalert2.min.css') }}">


    <!-- icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/1a8d64682d.js" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top" style="background-color: #401d35;">
        <div class="container">
            <div class="logo-1">
                <img class="img-fluid" src=" {{ asset('/img/logo-1.PNG') }} " alt="" width="56">
            </div>
            <a class="navbar-brand" href="#">
                <h3>Sanggar Macenning</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item" style="text-align: center;">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    @can('viewAny', App\Models\Peminjaman::class)
                        <li class="nav-item" style="text-align: center;">
                            <a class="nav-link" aria-current="page"
                                href="{{ url('peminjaman/' . $user->id) }}">Peminjaman</a>
                        </li>
                    @endcan
                    <li class="nav-item" style="text-align: center;">
                        <a class="nav-link" href="{{ url('contact') }}">Contact Us</a>
                    </li>
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
                    @can('viewAny', App\Models\Category::class)
                        <li class="nav-item" style="text-align: center;">
                            <a class="nav-link " aria-current="page" href="{{ url('admin/category') }}">Dashboard</a>
                        </li>
                    @endcan
                </ul>
            </div>
        </div>
    </nav>

    @yield('content-1')


    <div class="container">
        <div class="bagian-tengah">
            <div class="lapisan-bagian-tengah">
                <div class="deskripsi-1">
                    <div class="parent-1">
                        <div class="lapisan-deskripsi-1">
                            <h2>Abadikan momenmu</h2>
                            <h2>bersama Sanggar</h2>
                            <h2>Macenning</h2>
                        </div>
                    </div>
                </div>
                <div class="bagian-tengah-img">
                    <img src="{{ asset('/img/home/rm-3-1.png') }}" alt=""
                        style="width: 450px;
                    height: 367.8px;">
                </div>
            </div>
        </div>
    </div>



    @yield('content-2')




    <div class="penutup">
        <div class="lapisan-penutup">
            <div class="container-penutup px-4">
                <div class="lapisan-penutup-1 row gx-5">
                    <div class="content-penutup col">
                        <div class="slide-penutup p-3  ">
                            <h4>INFORMASI</h4>
                            <a href="{{ url('/') }}">About Us</a><br>
                            <a href="{{ url('/contact') }}">Contact Us</a><br>
                            <a href="#">Galeri</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="slide-penutup p-3  ">
                            <h4>Katalog</h4>
                            <a href="{{ url('/home/pria-wanita-aksesoris') }}">Set Baju Bodo</a><br>
                            <a href="{{ url('/home/baju-bodo') }}">Baju Bodo</a><br>
                            <a href="{{ url('/home/jas-tutup') }}">Jas Tutup</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="slide-penutup p-3  ">
                            <h4>Pelayanan</h4>
                            <strong style="color:#edeaec;">WhatsApp: </strong>
                            <a href="https://wa.me/6282297591854">082297591854</a><br><br>
                            <strong style="color:#edeaec;">Jam Operasional: </strong>
                            <p style="color:#edeaec;">Senin-Sabtu <br> 10.00-20.00 WIB</p>


                        </div>
                    </div>
                    <div class="col">
                        <div class="slide-penutup p-3  ">
                            <h4>Sosial Media</h4>
                            <a href="https://www.instagram.com/sanggar_macenning/">Instagram</a><br>
                            <a href="https://www.facebook.com/SanggarMacenning?mibextid=ZbWKwL">Facebook</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/js/script-home.js') }}"></script>
    <script src="{{ asset('vendor/realrashid/sweet-alert/sweetalert2.all.min.js') }}"></script>

    @yield('alert')



</body>

</html>
