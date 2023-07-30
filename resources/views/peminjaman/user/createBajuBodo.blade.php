@extends('peminjaman.PinjamUser')
@section('title', 'Peminjaman')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Peminjaman
                            <a href="{{ url('home/baju-bodo/' . $product->category->slug) }}"
                                class="btn btn-primary float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('peminjaman/' . $user->id) }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="id_user">User</label>
                                <select name="user_id" id="id_user" class="form-control">
                                    <option value="{{ $user->id }}">{{ $user->email }}</option>
                                </select>
                                @error('user_id')
                                    <span class="pesan_error  invalid-feedback" role="alert">
                                        <strong> {{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="id_product">Products</label>
                                <select name="product_id" id="id_product" class="form-control">
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                </select>
                                @error('user_id')
                                    <span class="pesan_error  invalid-feedback" role="alert">
                                        <strong> {{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" id="nama_lengkap">
                                @error('name')
                                    <span class="pesan_error  invalid-feedback" role="alert">
                                        <strong> {{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nomer">Nomor WhatsApp</label>
                                <input type="text" name="no_wa"
                                    class="form-control @error('no_wa') is-invalid @enderror" id="nomer">
                                @error('no_wa')
                                    <span class="pesan_error  invalid-feedback" role="alert">
                                        <strong> {{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tgl_pinjam">Tanggal Peminjaman</label>
                                <input id="tgl_pinjam" type="date"
                                    class="form-control @error('tgl_pinjam') is-invalid @enderror" name="tgl_pinjam"
                                    id="tgl_pinjam">
                                <p class="note-alert">
                                    Note* batas peminjaman 3 hari.
                                </p>
                            </div>
                            <div class="mb-3">
                                <label hidden for="tgl_kembali">Tanggal Pengembalian</label>
                                <input hidden id="tgl_kembali" type="date"
                                    class="form-control @error('tgl_kembali') is-invalid @enderror " name="tgl_kembali">
                            </div>
                            <div class="mb-3">
                                <label for="Keterangan">Keterangan</label>
                                <textarea name="ket" id="Keterangan" class="form-control" cols="30" rows="5"
                                    placeholder="Berikan keterangan tempat atau mengenai ukuran baju..."></textarea>
                                @error('ket')
                                    <span class="pesan_error  invalid-feedback" role="alert">
                                        <strong> {{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Pesan</button>
                            </div>




                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
