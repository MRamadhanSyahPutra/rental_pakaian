<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>@yield('title', 'Sanggar Macenning')</title>
    <link rel="shortcut icon" href="{{ asset('/img/logo.PNG') }}" type="image/x-icon">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('/css/style-peminjaman.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">




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
                        <a class="nav-link " aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item" style="text-align: center;">
                        <a class="nav-link" aria-current="page"
                            href="{{ url('peminjaman/' . $user->id) }}">Peminjaman</a>
                    </li>
                    <li class="nav-item" style="text-align: center;">
                        <a class="nav-link" href="#">Contact Us</a>
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
    </nav>



    <div class="container">
        <div class="judul">
            <h1>Halaman Peminjaman</h1>
        </div>
        @yield('content')
    </div>




    <script type="text/javascript" src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>

    <script>
        const tglPinjamInput = document.getElementById('tgl_pinjam');
        const tglKembaliInput = document.getElementById('tgl_kembali');

        // Fungsi untuk menyesuaikan tanggal kembali berdasarkan tanggal pinjam
        function adjustTglKembali() {
            const tglPinjamValue = tglPinjamInput.value;
            const tglKembaliValue = new Date(tglPinjamValue);
            tglKembaliValue.setDate(tglKembaliValue.getDate() + 3);

            const formattedDate = tglKembaliValue.toISOString().substr(0, 10);
            tglKembaliInput.value = formattedDate;
        }


        tglPinjamInput.addEventListener('change', adjustTglKembali);
    </script>


</body>

</html>
