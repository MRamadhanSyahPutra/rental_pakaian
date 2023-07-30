@extends('layouts.app')
@section('title', 'Login')

@section('content')
    <div class="lapisan-input">
        <h4 class="lapisan-judul">Already members</h4>
        <div class="lapisan-input-2">
            <form class="isi_data" action="{{ route('login') }}" method="post">
                @csrf
                <ul style="margin: 48.7px auto; list-style-type: none;">
                    <li class="input1">

                        <input class="email @error('email') is-invalid @enderror" type="text" name="email" id="username"
                            required placeholder="  Username" autocomplete="off" autofocus>

                        @error('email')
                            <span class="pesan-error invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </li>


                    <li class="input2">

                        <input class="password-1 @error('password') is-invalid @enderror" type="password" name="password"
                            id="password" required placeholder="  Password" autocomplete="off" autofocus>

                        @error('password')
                            <span class="pesan-error invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </li>

                    <li>
                        <button class="submit-login" type="submit" name="login">Login</button>
                    </li>

                </ul>
            </form>

        </div>
        <div class="penelusuran_to_resgiter">
            <strong>Don't have an account yet?</strong> <br>
            <a href="{{ route('register') }}" style="color: whitesmoke; ">Create an account</a>
        </div>
    </div>
@endsection
