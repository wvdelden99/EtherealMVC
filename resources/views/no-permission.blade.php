@extends('layouts.layout')

@section('title')
    <title>Ethereal - No Permission</title>
@endsection

@section('content')
    <div class="np-cont">
        <h2>No Permission</h2>
        <p>You don't have the permission to go further because you are missing the product to so or you don't have the right authorization.</p>
        <p>If you are missing the product buy one <a href="{{ route('plugins') }}">here</a> or take contact with the customer service <a href="{{ route('support') }}">here</a>.</p>
    </div>
@endsection