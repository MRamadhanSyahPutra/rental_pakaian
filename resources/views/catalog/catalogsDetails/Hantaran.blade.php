@extends('catalog.Catalog_Detail')
@section('title', 'Hantaran')
@section('MenuHantaran', 'active')

@section('content')
    <div class="row">
        @forelse ($category->products as $item)
            <div class="col">
                <div class="lapisan-responsif">
                    <div class="lapisan-pertama">
                        <div class="lapisan-kedua">
                            <div class="image">
                                <img src="{{ asset('storage/storage/product/' . $item->gambar) }}" alt="">
                            </div>
                        </div>
                        <div class="lapisan-ketiga">
                            <div class="caption">
                                <h5 class="nama-baju">{{ $item->name }}</h5>
                                <em class="price">Deskripsi</em>
                                <div class="set-namadetail">
                                    <p>{{ $item->bio_deskripsi }}</p>
                                </div>
                                <div class="deskripsi-hargaakse">
                                    <div class="harga-baju">
                                        <p>Harga baju : </p>
                                    </div>
                                    <div class="rupiah-akse">
                                        <p>Rp {{ $item->harga }}</p>
                                    </div>
                                </div>
                            </div>
                            @can('create', App\Models\Peminjaman::class)
                                <button class="hubungi">
                                    <a class="lihat-lainnya"
                                        href="{{ url('/home/hantaran/' . $category->slug . '/' . $item->id) }}">
                                        Pinjam
                                    </a>
                                </button>
                            @endcan
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
