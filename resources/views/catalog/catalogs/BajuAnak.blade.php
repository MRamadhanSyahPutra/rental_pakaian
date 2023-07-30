@extends('catalog.Catalog')
@section('title', 'Baju Anak')
@section('MenuBajuAnak', 'active')

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
                    <div class="caption" style="height: 64%;">
                        <h5 class="nama-baju">{{ $item->name }}</h5>
                        <em class="price">Pricelist</em>
                        <ul class="set-nama">
                            <li><strong>Polos (Rp. 75.000)</strong></li>
                            <li><strong>Fullpayet (Rp. 100.000)</strong></li>

                        </ul>
                        <p class="note">Note : Update harga 2023 untuk </br> kategori Baju Bodo Anak
                        </p>
                    </div>
                    <button class="hubungi"> Hubungi kami</button>
                    <button class="detail">
                        <a class="lihat-lainnya" href="{{ url('/home/baju-anak/' . $item->slug) }}">
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