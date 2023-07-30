@extends('Layouts.Home')
@section('title', 'Home')
@section('content-1')

    <div class="container-1" style="position: relative;">
        <div class="bg-blur shadow " style="overflow: hidden;">
            <img src="{{ asset('/img/home/bg-1.png') }}" alt="" width="100%" style="background-repeat: no-repeat;">
        </div>

        <div class="container">
            <div class="bagian-atas" style="background-color: transparent;">
                <div class="test">
                    <div class="parent-1">
                        <div class="bar-rekomendasi shadow ">


                            <div class="lapisan-rekomendasi swiper-wrapper ">
                                <div class="content-1  swiper-slide ">
                                    <li>
                                        <a href="{{ url('home/pria-wanita-aksesoris') }}">
                                            <img src="{{ asset('/img/home/rm-1-1.jfif') }}" alt="" width="133.7">
                                        </a>
                                    </li>

                                </div>
                                <div class="content-1  swiper-slide ">
                                    <li>
                                        <a href="{{ url('home/jas-tutup') }}">
                                            <img src="{{ asset('/img/home/rm-1-2.jpg') }}" alt="" width="133.7">
                                        </a>
                                    </li>

                                </div>
                                <div class="content-1  swiper-slide ">
                                    <li>
                                        <a href="{{ url('home/hantaran') }}">
                                            <img src="{{ asset('/img/home/rm-1-3.jpg') }}" alt="" width="133.7">
                                        </a>
                                    </li>

                                </div>
                                <div class="content-1  swiper-slide ">
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('/img/home/rm-1-3.png') }}" alt="" width="133.7">
                                        </a>
                                    </li>

                                </div>


                            </div>



                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="text-rekomendasi shadow ">
                        <h5>Rekomendasi untuk Anda</h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="set-baju">
            <div class="lapisan-set-baju">
                <div class="content-2">
                    <ul class="content-2-1">
                        <li class="shadow">
                            <a href="{{ url('/home/pria-wanita-aksesoris') }}">
                                <img src="{{ asset('/img/home/rm-2-1.png') }}" alt="set Baju Bodo" style="height: 350px;">
                                <span class="content-2-1">
                                    <p class="text">set Baju Bodo</p>
                                </span>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="content-2">
                    <ul class="content-2-1">
                        <li class="shadow">
                            <a href="{{ url('/home/baju-bodo') }}">
                                <img src="{{ asset('/img/home/rm-2-2.png') }}" alt="Baju Bodo" style="height: 350px;">
                                <span class="content-2-1">
                                    <p class="text">Baju Bodo</p>
                                </span>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="content-2">
                    <ul class="content-2-1">
                        <li class="shadow">
                            <a href="{{ url('/home/jas-tutup') }}">
                                <img src="{{ asset('/img/home/rm-2-3.png') }}" alt="Jas Tutup" style="height: 350px;">
                                <span class="content-2-1">
                                    <p class="text">Jas Tutup</p>
                                </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content-2')
    <div class="container">
        <div class="galeri">
            <div class="lapisan-galeri">
                <div class="heading-deskripsi">
                    <div class="judul-galeri">
                        <h2>GALERI</h2>
                    </div>
                    <div class="liat-semua">
                        <div class="pebungkus-1">
                            <a href="{{ url('home/pria-wanita-aksesoris') }}">See All</a>
                        </div>
                    </div>
                </div>
                <div class="list-galeri">
                    <div class="container">
                        <div class="container-galeri row row-cols-3">
                            <div class="content-list-galeri col">
                                <ul class="slide-galeri">
                                    <li class="shadow">
                                        <a href="{{ url('home/pria-wanita-aksesoris') }}">
                                            <img src="{{ asset('/img/home/galeri-1.jpg') }}" alt=""
                                                style="width: 294px;
                                                    height: 357.3px;">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-list-galeri col">
                                <ul class="slide-galeri">
                                    <li class="shadow">
                                        <a href="{{ url('home/mapacci') }}">
                                            <img src="{{ asset('/img/home/galeri-2.jpg') }}" alt=""
                                                style="width: 294px;
                                                    height: 357.3px;">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-list-galeri col">
                                <ul class="slide-galeri">
                                    <li class="shadow">
                                        <a href="{{ url('home/baju-bodo') }}">
                                            <img src="{{ asset('/img/home/galeri-3.jpg') }}" alt=""
                                                style="width: 294px;
                                                    height: 357.3px;">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-list-galeri col">
                                <ul class="slide-galeri">
                                    <li class="shadow">
                                        <a href="{{ url('home/jas-tutup') }}">
                                            <img src="{{ asset('/img/home/galeri-4.jpg') }}" alt=""
                                                style="width: 294px;
                                                    height: 357.3px;">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-list-galeri col">
                                <ul class="slide-galeri">
                                    <li class="shadow">
                                        <a href="{{ url('home/baju-anak') }}">
                                            <img src="{{ asset('/img/home/galeri-5.jpg') }}" alt=""
                                                style="width: 294px;
                                                    height: 357.3px;">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-list-galeri col">
                                <ul class="slide-galeri">
                                    <li class="shadow">
                                        <a href="{{ url('home/hantaran') }}">
                                            <img src="{{ asset('/img/home/galeri-6.jpg') }}" alt=""
                                                style="width: 294px;
                                                    height: 357.3px;">
                                        </a>
                                    </li>
                                </ul>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('alert')
    @include('sweetalert::alert')
@endsection
