@extends('layouts.dashboard-layout')

@section('title')
    <title>Ethereal - {{ Auth::user()->name }} Purchase History</title>
@endsection

@section('dashboard-content')
    <div class="dashboard-cont">
        <h1>Purchase History</h1>
    </div>
@endsection