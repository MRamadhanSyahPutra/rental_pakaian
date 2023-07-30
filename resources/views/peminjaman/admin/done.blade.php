@extends('peminjaman.ActionAdmin')
@section('title', 'Peminjaman')
@section('judul', 'Form pengembalian')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tanggal pengembalian peminjaman
                            <a href="{{ url('admin/peminjaman') }}" class="btn btn-primary float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('admin/peminjaman/' . $peminjaman->id . '/done') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="dipulangkan">Tanggal</label>
                                <input type="date" class="form-control" name="tgl_sudah_dikembalikan"
                                    value="{{ old('tgl_sudah_dikembalikan') ?? ($peminjaman->tgl_sudah_dikembalikan ?? '') }}">
                                @error('tgl_sudah_dikembalikan')
                                    <span class="pesan_error  invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Done</button>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
