@extends('layout')

@section('title')
    <title>Ethereal - Login</title>
@endsection

@section('css')
    <link href="{{asset('css/user.css')}}" rel="stylesheet">
<!-- <link href="{{asset('css/app.css')}}" rel="stylesheet"> -->
@endsection

@section('content')
    <div class="logreg-cont">
        <div class="logreg-cont-body">
            <div class="logreg-cont_header">{{ __('Login') }}</div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="logreg-cont-box">
                    <label for="email">{{ __('E-Mail Address') }}</label>

                    <div class="logreg-cont_inp">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                     </div>
                </div>

                <div class="logreg-cont-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <div class="logreg-cont-sbmt">
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

            <div class="logreg-cont-btm">Don't have a account yet?<a href="{{ route('register')}}">Sign Up Now</a></div>
        </div>
    </div>
@endsection
