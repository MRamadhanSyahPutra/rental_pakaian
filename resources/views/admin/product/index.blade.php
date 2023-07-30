@extends('admin.dashboard')
@section('title', 'Product')
@section('nav-product', 'active')

@push('styles')
    @livewireStyles
@endpush

@section('content')
    <div class="container">
        <div class="row">
            @livewire('products-table')
        </div>
    </div>
@endsection

@section('alert')

    @include('sweetalert::alert')
    @if (session('sound_effect'))
        <audio id="successSound" src="{{ session('sound_effect') }}" type="audio/aac"></audio>
        <script>
            // Memainkan suara setelah halaman dimuat
            window.addEventListener('DOMContentLoaded', (event) => {
                document.getElementById('successSound').play();
            });
        </script>
    @endif

@endsection

@push('scripts')
    @livewireScripts
@endpush
