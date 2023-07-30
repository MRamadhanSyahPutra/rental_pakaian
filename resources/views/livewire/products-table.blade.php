<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>Product Details
                <input type="search" wire:model="search" class="form-control float-end mx-2" style="width: 230px"
                    placeholder="Search..">
                <a href="{{ url('admin/products/create') }}" class="btn btn-primary float-end">Add product</a>
            </h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Nama</th>
                    <th>Gambar</th>
                    <th>Bio deskripsi</th>
                    <th>Harga</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @forelse ($Products as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->category->name }}</td>
                            <td>{{ $item->name }}</td>
                            <td><img style="width: 110px; height: 130px;"
                                    src="{{ asset('storage/storage/product/' . $item->gambar) }}" alt="">
                            </td>
                            <td>
                                <p>{{ $item->bio_deskripsi }}</p>
                            </td>
                            <td> {{ $item->harga }} </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ url('admin/products/' . $item->id . '/edit') }}"
                                        class="btn btn-success">Edit</a>
                                    <form action="{{ route('destroy', ['product' => $item->id]) }}" method="POST">

                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger ms-3">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <div class="alert alert-primary" role="alert">
                            Belum ada data
                        </div>
                    @endforelse

                </tbody>
            </table>
            {{ $Products->links() }}
        </div>
    </div>
</div>
