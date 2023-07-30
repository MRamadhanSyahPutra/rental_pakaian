@extends('catalog.Catalog')
@section('title', 'PriaWanita Dan Aksesoris')
@section('MenuPriaWanitaDanAksesoris', 'active')

@section('content')

<div class="row">
    @forelse ($categories as $item)
    <div class="col">
        <div class="lapisan-responsif">
            <div class="lapisan-pertama">
                <div class="lapisan-kedua">
                    <div class="image">
                        <img src="{{ asset('storage/storage/category/' . $item->gambar) }}" alt="">
                    </div>
                </div>
                <div class="lapisan-ketiga">
                    <div class="caption">
                        <h5 class="nama-baju">{{ $item->name }}</h5>
                        <em class="price">Pricelist</em>
                        <ul class="set-nama">
                            <li><strong>Set perhiasan 1 (2.000.000)</strong></li>
                            <li><strong>Set perhiasan 2 (2.500.000)</strong></li>
                            <li><strong>Set perhiasan 3 (3.500.000)</strong></li>
                            <li><strong>Set perhiasan 4 (4.500.000)</strong></li>
                            <li><strong>Set perhiasan 5 (5.500.000)</strong></li>
                        </ul>
                        <p class="note">Note : Pembelian diwajibkan </br> bersama dengan
                            aksesoris.!
                        </p>
                    </div>
                    <button class="hubungi"> Hubungi kami</button>
                    <button class="detail">
                        <a class="lihat-lainnya" href="{{ url('/home/pria-wanita-aksesoris/' . $item->slug) }}">
                            Lihat lainnya
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="alert alert-primary" role="alert">
        Belum ada data
    </div>
    @endforelse
</div>
@endsection