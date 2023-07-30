@extends('peminjaman.indexUser')
@section('title', 'Riwayat peminjaman')
@section('judul', 'List peminjaman')


@section('content')
    @can('viewAny', App\Models\Peminjaman::class)
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">

                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <th>No</th>
                                        <th>Email</th>
                                        <th>Nama product</th>
                                        <th>Nama lengkap</th>
                                        <th>No WhatsApp</th>
                                        <th>Tanggal peminjaman</th>
                                        <th>Tanggal pengembalian</th>
                                        <th>Tanggal sudah di kembalikan</th>
                                        <th>Status</th>
                                        <th>Keterangan</th>
                                    </thead>
                                    <tbody>
                                        @forelse ($peminjaman as $item)
                                            <tr
                                                class=" {{ $item->tgl_sudah_dikembalikan == null ? '' : ($item->tgl_kembali > $item->tgl_sudah_dikembalikan ? 'bg-success text-white ' : 'bg-danger text-white ') }} ">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->users->email }}</td>
                                                <td>
                                                    <a style="text-decoration: none; color: black;"
                                                        href="{{ url('peminjaman/' . $item->users->id . '/' . $item->productss->id) }}">
                                                        {{ $item->productss->name }}
                                                    </a>
                                                </td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->no_wa }}</td>
                                                <td>{{ $item->tgl_pinjam }}</td>
                                                <td>{{ $item->tgl_kembali }}</td>
                                                <td>{{ $item->tgl_sudah_dikembalikan }}</td>
                                                <td>
                                                    <p
                                                        class="{{ $item->status == 'menunggu konfirmasi' ? 'text-info bg-white shadow-sm p-2 mb-5 rounded' : ($item->status == 'konfirmasi diterima' ? 'text-success bg-white shadow-sm p-2 mb-5 rounded' : 'text-danger bg-white shadow-sm p-2 mb-5 rounded') }}">
                                                        {{ $item->status }}</p>
                                                </td>
                                                <td>
                                                    <p>{{ $item->ket }}</p>
                                                </td>
                                            </tr>
                                        @empty
                                            <div class="alert alert-primary" role="alert">
                                                Belum ada data
                                            </div>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endcan
@endsection

@section('alert')
    @include('sweetalert::alert')
@endsection
