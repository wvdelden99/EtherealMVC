@extends('layout')

@section('title')
    <title>Ethereal - Register</title>
@endsection

@section('css')
    <link href="{{asset('css/user.css')}}" rel="stylesheet">
<!-- <link href="{{asset('css/app.css')}}" rel="stylesheet"> -->
@endsection

@section('content')
    <div class="logreg-cont">
        <div class="logreg-cont-body">
            <div class="logreg-cont_header">{{ __('Register') }}</div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="logreg-cont-box">
                    <label for="name">{{ __('Name') }}</label>

                    <div class="logreg-cont_inp">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="logreg-cont-box">
                    <label for="email">{{ __('E-Mail Address') }}</label>

                    <div class="logreg-cont_inp">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="logreg-cont-box">
                    <label for="password">{{ __('Password') }}</label>

                    <div class="logreg-cont_inp">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="logreg-cont-box">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>

                    <div class="logreg-cont_inp">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="logreg-cont-sbmt">
                    <button type="submit">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>

            <div class="logreg-cont-btm">Already have a account?<a href="{{ route('login')}}">Sign In</a></div>
        </div>
    </div>
@endsection
