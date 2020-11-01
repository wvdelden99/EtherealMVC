@extends('layouts.layout')

@section ('css')
    <link href="{{asset('css/user.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="dashboard">
        <div class="dashboard-body">
            <div class="dashboard_list">
                <div class="dashboard-user-data">
                    <h1>{{ Auth::user()->name }}</h1>
                    <h2>{{ Auth::user()->email }}</h2>
                </div>
                <a class="dashboard_link" href="{{ route('login')}}">
                    <div class="dashboard_link-item">Account Overview</div>
                </a>
                <a class="dashboard_link" href="{{ route('edit-account')}}">
                    <div class="dashboard_link-item">Edit Account</div>
                </a>
                <a class="dashboard_link" href="{{ route('purchase-history')}}">
                    <div class="dashboard_link-item">Purchase History</div>
                </a>
                <a class="dashboard_link" href="{{ route('presets-and-wishlist')}}">
                    <div class="dashboard_link-item">Presets & Wishlist</div>
                </a>
                @can('edit')
                    <a class="dashboard_link" href="{{ route('admin')}}">
                        <div class="dashboard_link-item">Admin Tab</div>
                    </a>
                @endcan
            </div>

            @yield('dashboard-content')
        </div>
    </div>
@endsection