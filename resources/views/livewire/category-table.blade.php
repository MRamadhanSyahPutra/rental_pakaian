<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>Category Details
                <input type="search" wire:model="search" class="form-control float-end mx-2" style="width: 230px"
                    placeholder="Search..">
                <a href="{{ url('admin/category/create') }}" class="btn btn-primary float-end">Add category</a>
            </h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Gambar</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @forelse ($categories as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td><img style="width: 110px; height: 130px;"
                                    src="{{ asset('storage/storage/category/' . $item->gambar) }}" alt="">
                            </td>
                            <td>
                                <a href="{{ url('admin/category/' . $item->id . '/delete') }}"
                                    class="btn btn-danger">Hapus</a>

                            </td>
                        </tr>
                    @empty
                        <div class="alert alert-primary" role="alert">
                            Belum ada data
                        </div>
                    @endforelse

                </tbody>
            </table>
            {{ $categories->links() }}
        </div>
    </div>
</div>
