@extends('catalog.Catalog')
@section('title', 'Jas Tutup')
@section('MenuJasTutup', 'active')

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
                            <li><strong>Jas Tutup + Sarung Jas (Rp. 100.000)</strong></li>
                            <li><strong> Sarung + Pabekkeng + Songkok recca’ (Rp. 150.000)</strong></li>
                        </ul>
                        <p class="note">Note : Ada banyak warna Jas tutup,</br> Jas tutup, hubungi kami jika </br> ingin melihat warna lain
                        </p>
                    </div>
                    <button class="hubungi"> Hubungi kami</button>
                    <button class="detail">
                        <a class="lihat-lainnya" href="{{ url('/home/jas-tutup/' . $item->slug) }}">
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