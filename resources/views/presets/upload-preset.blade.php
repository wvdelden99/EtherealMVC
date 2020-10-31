@extends('layouts.layout')

@section('title')
    <title>Ethereal - Upload Preset</title>
@endsection

@section('content')
    <div class="cmnup-cont">
        <div class="cmnup-cont_form">
        <form method="POST" action="{{ route('community')}}">
            @csrf
                <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id}}">
            <label for="preset_title">Preset Title</label>
                <input type="text"  name="preset_title" id="preset_title">

                <input type="hidden" name="creator" id="creator" value="{{Auth::user()->name}}">

            <label for="category">Category</label>
                <select name="category" id="category">
                    @foreach($categories as $category)
                        <option value="{{$category->name}}">{{$category->name}}</opition>
                    @endforeach
                </select>

                <button class="button is-link" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection