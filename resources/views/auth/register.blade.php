@extends('layouts.app')
@section('title', 'Register')

@section('content')
    <div class="lapisan-input">
        <h4 class="lapisan-judul">Create an account</h4>
        <div class="lapisan-input-2">
            <form class=" isi_data" method="POST" action="{{ route('register') }}">
                @csrf
                <ul style="margin: 35.7px auto; list-style: none;">
                    <li class="inputan">

                        <input class="@error('name') is-invalid @enderror" type="text" name="name" id="name"
                            required placeholder="   Full name" autocomplete="off"
                            style=" margin-bottom:5px; border-radius: 3.5px; width: 189.3px;" autofocus>
                        @error('name')
                            <span class="pesan_error  invalid-feedback" role="alert">
                                <strong> {{ $message }}</strong>
                            </span>
                        @enderror
                    </li>
                    <li class="input-register">

                        <input class="@error('email') is-invalid @enderror" type="text" name="email" id="username"
                            required placeholder="   Username" autocomplete="off"
                            style=" margin-bottom:5px; border-radius: 3.5px; width: 189.3px;  ">
                        @error('email')
                            <span class="pesan_error  invalid-feedback" role="alert">
                                <strong> {{ $message }}</strong>
                            </span>
                        @enderror
                    </li>
                    <li class="input-register">

                        <input class="@error('password') is-invalid @enderror" type="password" name="password"
                            id="password" required placeholder="   Password" autocomplete="off"
                            style=" margin-bottom:5px; border-radius: 3.5px; width: 189.3px;  ">
                        @error('password')
                            <span class="pesan_error  invalid-feedback" role="alert">
                                <strong> {{ $message }}</strong>
                            </span>
                        @enderror

                    </li>
                    <li class="input-register">

                        <input type="password" name="password_confirmation" required autocomplete="new-password" required
                            placeholder="   Re-enter password"
                            style=" margin-bottom:10.3px; border-radius: 3.5px; width: 189.3px;  ">
                        @error('password')
                            <span class="pesan_error  invalid-feedback" role="alert">
                                <strong> {{ $message }}</strong>
                            </span>
                        @enderror
                    </li>
                    <li class="input-submit">
                        <button class="submit-register" type="submit" name="register">Create account</button>
                    </li>


                </ul>

        </div>
        <div class="penelusuran_to_login" style="margin-left: 33.24px;">
            <strong>Already have an account?</strong><br>
            <a href="{{ route('login') }}" style="color: whitesmoke; ">Log in</a>
        </div>
    </div>
@endsection
