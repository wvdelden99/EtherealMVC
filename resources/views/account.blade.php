@extends('layout')

@section ('sign-css')
    <link href="{{asset('css/user.css')}}" rel="stylesheet">
<!-- <link href="{{asset('css/app.css')}}" rel="stylesheet"> -->
@endsection

@section('content')
    <div class="acc-cont">
        <div class="acc-cont-body">
            <div class="acc-cont_list">
                <div class="acc-cont-user-data">
                    <h1>{{ Auth::user()->name }}</h1>
                    <h2>{{ Auth::user()->email }}</h2>
                </div>
                <a class="acc-cont_link" href="">
                    <div class="acc-cont_link-box">Account Overview</div>
                </a>
                <a class="acc-cont_link" href="">
                    <div class="acc-cont_link-box">Purchase History</div>
                </a>
                <a class="acc-cont_link" href="">
                    <div class="acc-cont_link-box">Presets & Wishlist</div>
                </a>
            </div>


            <div class="acc-cont-box">
                <h1>Account</h1>
                <div class="acc-cont-info">
                        <div class="acc-cont-info-box">
                            <h2>Personal Information</h2>
                            <div class="acc-cont-info-cont">
                                <p>{{ Auth::user()->name }}</p>
                                <a href="">Edit</a>
                            </div>
                        </div>
                        <div class="acc-cont-info-box">
                            <h2>Email & Password</h2>
                            <div class="acc-cont-info-cont">
                                <p>{{ Auth::user()->email }}</p>
                                <a href="">Edit</a>
                            </div>
                            <div class="acc-cont-info-cont">
                                <p>********</p>
                                <a href="">Edit</a>
                            </div>
                        </div>
                        <div class="acc-cont-info-box">
                            <h2>Billing & Shipping Information</h2>
                            <div class="acc-cont-info-cont">
                                <p></p>
                                <a href="">Edit</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection