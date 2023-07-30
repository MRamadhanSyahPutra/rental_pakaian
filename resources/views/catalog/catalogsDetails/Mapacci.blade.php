@extends('catalog.Catalog_Detailmapaci')
@section('title', 'Mapacci')
@section('MenuMapacci', 'active')

@section('content')
<div class="row">
    @forelse ($category->products as $item)
    <div class="col">
        <div class="lapisan-mapaci1">
            <div class="lapisan-mapaci2">
                <div class="lapisan-mapaci3">
                    <div class="image-mapaci">
                        <img class="foto-mapaci" src="{{ asset('storage/storage/product/' . $item->gambar) }}" alt="">
                    </div>
                </div>
                <div class="lapisan-mapaci4">
                    <div class="caption-mapaci">
                        <div class="judul-paket">
                            <h2 class="1">{{ $item->name }}</h2>
                        </div>
                        <div class="harga-mapacci">
                            <table class="price-mapacci">
                                <tr>
                                    <th class="paket-mapacci">● Harga :</th>
                                    <th class="harga-paket">Rp. {{ $item->harga }}</th>
                                </tr>
                            </table>
                            @can('create', App\Models\Peminjaman::class)
                                <button class="mapacci">
                                    <a class="lihat-lainnya"
                                        href="{{ url('/home/mapacci/' . $category->slug . '/' . $item->id) }}">
                                        Pinjam
                                    </a>
                                </button>
                            @endcan
                        </div>
                        <div class="desk-mapaci">
                            <p class="desk-1">{{ $item->bio_deskripsi }}</p>
                        </div>
                        <div class="note-mapacci">
                            <h2 id="1">Note :</h2>
                            <h2 id="2">*Prosesi mapacci : MC, 2 orang pembawa lilin, 1 orang pemandu/indo’ botting</h2>
                        </div>
                    </div>
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