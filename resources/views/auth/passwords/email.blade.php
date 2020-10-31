@extends('layouts.layout')

@section('title')
    <title>Ethereal - Reset Password</title>
@endsection

@section('css')
    <link href="{{asset('css/user.css')}}" rel="stylesheet">
<!-- <link href="{{asset('css/app.css')}}" rel="stylesheet"> -->
@endsection

@section('content')
    <div class="sign-body">
        <div class="sign-cont">
            <div class="sign_header">{{ __('Reset Password') }}</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="sign-cont-box">
                        <label for="email">{{ __('E-Mail Address') }}</label>

                        <div class="sign_input">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="sign_submit">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
