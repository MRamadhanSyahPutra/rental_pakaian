@extends('peminjaman.ActionAdmin')
@section('title', 'Konfirmasi status')
@section('judul', 'Form Konfirmasi')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Status peminjaman
                            <a href="{{ url('admin/peminjaman') }}" class="btn btn-primary float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        {{-- {{ $peminjaman }} --}}
                        <form action="{{ url('admin/peminjaman/' . $peminjaman->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="menunggu konfirmasi" @if ($peminjaman->status == 'menunggu konfirmasi') selected @endif>
                                        menunggu konfirmasi</option>
                                    <option value="konfirmasi diterima" @if ($peminjaman->status == 'konfirmasi diterima') selected @endif>
                                        konfirmasi diterima</option>
                                    <option value="gagal peminjaman" @if ($peminjaman->status == 'gagal peminjaman') selected @endif>gagal
                                        peminjaman</option>
                                </select>
                                @error('status')
                                    <span class="pesan_error  invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
