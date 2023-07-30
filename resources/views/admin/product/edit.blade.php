@extends('admin.dashboard')
@section('title', 'Product')
@section('nav-product', 'active')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Update Product
                            <a href="{{ url('admin/products') }}" class="btn btn-primary float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('admin/products/' . $product->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="pilih-category">Pilih Category</label>
                                <select name="category_id" id="pilih-category" class="form-control">
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $product->category_id == $item->id ? 'selected' : '' }}>
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="pesan_error  invalid-feedback" role="alert">
                                        <strong> {{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name">Product Name</label>
                                <input type="text" name="name" value="{{ old('name') ?? ($product->name ?? '') }}"
                                    class="form-control @error('name') is-invalid @enderror " id="name">
                                @error('name')
                                    <span class="pesan_error  invalid-feedback" role="alert">
                                        <strong> {{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="image">Product Images</label>
                                {{-- <img src="{{ asset('storage/storage/product' . $product->gambar) }}" alt=""
                                    class="img-thumbnail "> --}}
                                <input type="file" name="gambar" value="{{ old('gambar') ?? ($product->gambar ?? '') }}"
                                    class="form-control @error('gambar') is-invalid @enderror" id="image">
                                @error('gambar')
                                    <span class="pesan_error  invalid-feedback" role="alert">
                                        <strong> {{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="bio-deskripsi">Bio Deskripsi</label>
                                <textarea name="bio_deskripsi" id="bio-deskripsi" class="form-control" cols="30" rows="5"
                                    placeholder="Bio deskripsi pakaian anda...">{{ old('bio_deskripsi') ?? ($product->bio_deskripsi ?? '') }}</textarea>
                                @error('bio_deskripsi')
                                    <span class="pesan_error  invalid-feedback" role="alert">
                                        <strong> {{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="hrg">Product Harga</label>
                                <input type="text" name="harga" value="{{ old('harga') ?? ($product->harga ?? '') }}"
                                    class="form-control @error('harga') is-invalid @enderror" id="hrg">
                                @error('harga')
                                    <span class="pesan_error  invalid-feedback" role="alert">
                                        <strong> {{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>




                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
