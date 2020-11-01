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
                        <input class="@error('name') error_input @enderror" type="text" id="name" name="name" value="{{ old('name') }}" autocomplete="name" autofocus required>

                        @error('name')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="sign-cont-box">
                    <label for="email">{{ __('E-Mail Address') }}</label>

                    <div class="sign_input">
                        <input class="@error('email') error_input @enderror" type="email" id="email" name="email" value="{{ old('email') }}" autocomplete="email" required>

                        @error('email')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="sign-cont-box">
                    <label for="password">{{ __('Password') }}</label>

                    <div class="sign_input">
                        <input class="@error('password') error_input @enderror" type="password" id="password" name="password" autocomplete="new-password" required>

                        @error('password')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="sign-cont-box">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>

                    <div class="sign_input">
                        <input type="password" id="password-confirm" name="password_confirmation" autocomplete="new-password" required>
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
