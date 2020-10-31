@extends('layouts.layout')

@section('title')
    <title>Ethereal - Sign Up</title>
@endsection

@section('css')
    <link href="{{asset('css/user.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="sign-body">
        <div class="sign-cont">
            <div class="sign_header">Sign Up</div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="sign-cont-box">
                    <label for="name">{{ __('Name') }}</label>

                    <div class="sign_input">
                        <input id="name" type="text" class="@error('name') error_inp @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="sign-cont-box">
                    <label for="email">{{ __('E-Mail Address') }}</label>

                    <div class="sign_input">
                        <input id="email" type="email" class="@error('email') error_inp @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="sign-cont-box">
                    <label for="password">{{ __('Password') }}</label>

                    <div class="sign_input">
                        <input id="password" type="password" class="@error('password') error_inp @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <p class="error">{{ message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="sign-cont-box">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>

                    <div class="sign_input">
                        <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="sign_submit">
                    <button type="submit">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>

            <div class="sign-cont-btm">Already have a account?
                <a href="{{ route('login')}}">Sign In</a>
            </div>
        </div>
    </div>
@endsection
