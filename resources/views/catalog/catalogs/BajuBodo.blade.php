@extends('catalog.Catalog')
@section('title', 'Baju Bodo')
@section('MenuBajuBodo', 'active')

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
                        {{-- <p class="nama-baju">baju bodo</p>
                                <p class="model">model sabrina</p> --}}
                        <em class="price">PRICELIST</em>
                        <ul class="set-nama">
                            <li><strong> Baju Bodo Polos + Sarung Rp. 100.000-</strong></li>
                            <li><strong> Baju Bodo Bordir + Sarung Rp. 150.000-</strong></li>
                            <li><strong> Baju Bodo Payet + Sarung Rp. 175.000-</strong></li>
                        </ul>
                        {{-- <p class="note">Note : Pembelian diwajibkan </br> bersama dengan
                                    aksesoris.!
                                </p> --}}
                    </div>
                    <button class="hubungi"> Hubungi kami</button>
                    <button class="detail">
                        <a class="lihat-lainnya" href="{{ url('/home/baju-bodo/' . $item->slug) }}">
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