@extends('layouts.layout')

@section('title')
    <title>Ethereal - Sign In</title>
@endsection

@section('css')
    <link href="{{asset('css/user.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="sign-body">
        <div class="sign-cont">
            <div class="sign_header">Sign In</div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="sign-cont-box">
                    <label for="email">{{ __('E-Mail Address') }}</label>

                    <div class="sign_input">
                        <input id="email" type="email" class="@error('email') error_inp @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="sign-cont-box">
                    <label for="password">{{ __('Password') }}</label>

                    <div class="sign_input">
                        <input id="password" type="password" class="@error('password') error_inp @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <p class="error">{{ $message }}</p>
                        @enderror
                     </div>
                </div>

                <div class="sign-check">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <div class="sign_submit">
                    <button type="submit">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>

            <div class="sign-cont-btm">Don't have a account yet?
                <a href="{{ route('register')}}">Sign Up Now</a>
            </div>
        </div>
    </div>
@endsection
