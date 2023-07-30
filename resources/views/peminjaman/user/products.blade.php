@extends('peminjaman.indexUser')
@section('title', 'Details product')
@section('judul', 'Details peminjaman product')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Product
                        <a href="{{ url('peminjaman/' . $peminjaman->users->id) }}" class="btn btn-primary float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <th>No</th>
                            <th>Category</th>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Bio deskripsi</th>
                            <th>Harga</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>{{ $peminjaman->productss->category->name }}</td>
                                <td>{{ $peminjaman->productss->name }}</td>
                                <td><img style="width: 110px; height: 130px;"
                                        src="{{ asset('storage/storage/product/' . $peminjaman->productss->gambar) }}"
                                        alt="">
                                </td>
                                <td>
                                    <p>{{ $peminjaman->productss->bio_deskripsi }}</p>
                                </td>
                                <td> {{ $peminjaman->productss->harga }} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
