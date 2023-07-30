@extends('peminjaman.indexAdmin')
@section('title', 'Peminjaman')
@section('judul', 'Halaman peminjaman users');

@push('styles')
    @livewireStyles
@endpush

@section('content')
    <div class="container">
        <div class="row">
            @livewire('peminjaman-table')
        </div>
    </div>
@endsection

@section('alert')
    @include('sweetalert::alert')
@endsection


@push('scripts')
    @livewireScripts
@endpush
