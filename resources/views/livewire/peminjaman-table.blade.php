<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <input type="search" wire:model="search" class="form-control float-end mx-2" style="width: 230px"
                placeholder="Search..">
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Nama product</th>
                    <th>Nama lengkap</th>
                    <th>No WhatsApp</th>
                    <th>Tanggal peminjaman</th>
                    <th>Tanggal pengembalian</th>
                    <th>Tanggal sudah di kembalikan</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @forelse ($peminjaman as $item)
                        <tr
                            class=" {{ $item->tgl_sudah_dikembalikan == null ? '' : ($item->tgl_kembali > $item->tgl_sudah_dikembalikan ? 'bg-success text-white ' : 'bg-danger text-white ') }} ">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->users->email }}</td>
                            <td>
                                <a style="text-decoration: none; color: black;"href="{{ url('admin/peminjaman/' . $item->productss->id) }}">
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
                            <td>
                                <button class="btn btn-info shadow-lg rounded">
                                    <a style="text-decoration: none; color: black;" href="{{ url('admin/peminjaman/' . $item->id . '/edit') }}" class="text-white">
                                        Konfirmasi
                                    </a>
                                </button>
                                <button class="btn btn-danger shadow-lg rounded ">
                                    <a style="text-decoration: none; color: black;" href="{{ url('admin/peminjaman/' . $item->id . '/delete') }}"
                                        class="text-white">
                                        Hapus
                                    </a>
                                </button>
                                <button class="btn btn-success shadow-lg rounded ">
                                    <a style="text-decoration: none; color: black;" href="{{ url('admin/peminjaman/' . $item->id . '/pengembalian') }}"
                                        class="text-white">
                                        Done
                                    </a>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <div class="alert alert-primary" role="alert">
                            Belum ada data
                        </div>
                    @endforelse
                </tbody>
            </table>
            {{ $peminjaman->links() }}
        </div>
    </div>
</div>
