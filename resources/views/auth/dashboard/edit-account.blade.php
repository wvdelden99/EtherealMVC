@extends('layouts.dashboard-layout')

@section ('title')
    <title>Ethereal - {{ Auth::user()->name }} Account Overview</title>
@endsection

@section('dashboard-content')
    <div class="dashboard-cont">
        <h1>Edit Account</h1>
        <div class="dashboard-cont-box">
            <div class="dashboard-row">
                <h2>Personal Information</h2>
                <div class="dashboard-row-cont">
                    <p>{{ Auth::user()->name }}</p>
                    <a href="">Edit</a>
                </div>
            </div>
            <div class="dashboard-row">
                <h2>Email & Password</h2>
                <div class="dashboard-row-cont">
                    <p>{{ Auth::user()->email }}</p>
                    <a href="">Edit</a>
                </div>
                <div class="dashboard-row-cont">
                    <p>********</p>
                    <a href="">Edit</a>
                </div>
            </div>
            <div class="dashboard-row">
                <h2>Billing & Shipping Information</h2>
                <div class="dashboard-row-cont">
                    <p></p>
                    <a href="">Edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection