@extends('catalog.Catalog_Mapaci')
@section('title', 'Mapacci')
@section('MenuMapacci', 'active')

@section('content')

<div class="row">
    @forelse ($categories as $item)
    <div class="col">
        <div class="lapisan-responsif-mapaci">
            <div class="lapisan-mapaci2">
                <div class="lapisan-mapaci3">
                    <div class="image-mapaci">
                        <img class="foto-mapaci" src="{{ asset('storage/storage/category/' . $item->gambar) }}" alt="">
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
                                    <th class="paket-mapacci">● Paket I :</th>
                                    <th class="harga-paket">Rp, 1.500.000</th>
                                </tr>
                                <tr>
                                    <th class="paket-mapacci">● Paket II :</th>
                                    <th class="harga-paket">Rp, 3.500.000</th>
                                </tr>
                            </table>
                            <div class="button-mapaci">
                                <button class="mapacci">
                                    <a class="hubungi-kami" href="#">Hubungi kami</a>
                                </button>
                                <button class="mapacci">
                                    <a class="lihat-lainnya" href="{{ url('/home/mapacci/' . $item->slug) }}">Lihat
                                        lainnya</a>
                                </button>
                            </div>
                            <div class="note-mapacci">
                                <h2>Note :</h2>
                                <h3>*Prosesi mapacci : MC, 2 orang pembawa lilin, 1 orang pemandu/indo’ botting</h3>
                            </div>
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