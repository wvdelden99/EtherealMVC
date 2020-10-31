@extends('layouts.dashboard-layout')

@section('title')
    <title>Ethereal - {{ Auth::user()->name }} Account Page</title>
@endsection

@section('dashboard-content')
    <div class="dashboard-cont">
        <h1>Account Overview</h1>
    </div>
@endsection
