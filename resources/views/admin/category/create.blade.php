@extends('admin.dashboard')
@section('title', 'Category')
@section('nav-category', 'active')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Category
                            <a href="{{ url('admin/category') }}" class="btn btn-primary float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('admin/category') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="name">Category Name</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror " id="name">
                                @error('name')
                                    <span class="pesan_error  invalid-feedback" role="alert">
                                        <strong> {{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="image">Category image</label>
                                <input type="file" name="gambar"
                                    class="form-control @error('gambar') is-invalid @enderror" id="image">
                                @error('gambar')
                                    <span class="pesan_error  invalid-feedback" role="alert">
                                        <strong> {{ $message }}</strong>
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
