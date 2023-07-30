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
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/catalog.css') }}">
    <link rel="shortcut icon" href="{{ asset('/img/logo.PNG') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/css/Layout/Catalog-detail/fix-detailmapaci.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/Layout/Catalog-detail/detail-mapaci.css') }}">
        

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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item" style="text-align: center;">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item" style="text-align: center;">
                        <a class="nav-link" href="{{ url('contact') }}">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown" style="text-align: center;">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Hi,
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
        <div class="catalogfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="judul">
                            <h1>Catalog</h1>
                        </div>
                    </div>
                </div>
                <div class="bar-catalog">
                    <ul class="bar">
                        <li>
                            <a class="@yield('MenuPriaWanitaDanAksesoris')" href="{{ url('/home/pria-wanita-aksesoris') }}" style="color: #FFFFFF; margin: 0 9px; text-decoration:none">Pria wanita dan
                                Aksesoris</a>
                        </li>
                        <li>
                            <a class="@yield('MenuMapacci')" href="{{ url('/home/mapacci') }}" style="color: #FFFFFF; margin: 0 9px; text-decoration:none">Mapacci</a>
                        </li>
                        <li>
                            <a class="@yield('MenuBajuBodo')" href="{{ url('/home/baju-bodo') }}" style="color: #FFFFFF; margin: 0 9px; text-decoration:none">Baju
                                bodo</a>
                        </li>
                        <li>
                            <a class="@yield('MenuJasTutup')" href="{{ url('/home/jas-tutup') }}" style="color: #FFFFFF; margin: 0 9px; text-decoration:none">Jas
                                tutup</a>
                        </li>
                        <li>
                            <a class="@yield('BajuAnak')" href="{{ url('/home/baju-anak') }}" style="color: #FFFFFF; margin: 0 9px; text-decoration:none">Baju
                                anak</a>
                        </li>
                        <li>
                            <a class="@yield('MenuHantaran')" href="{{ url('/home/hantaran') }}" style="color: #FFFFFF; margin: 0 9px; text-decoration:none">Hantaran</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="lapisan-catalog">
            <div class="lapisan-dalam-catalog">
                @yield('content')
            </div>
        </div>
    </div>







    <script type="text/javascript" src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>