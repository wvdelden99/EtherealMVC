@extends('layouts.layout')

@section('title')
    <title>Ethereal - Upload Preset</title>
@endsection

@section('content')
    <div class="cmnup-cont">
        <div class="cmnup-cont_form">
        <form method="POST" action="{{ route('community')}}">
        @csrf
                <div class="field">
                    <label class="label" for="preset_title">Preset Title</label>

                    <div class="control">
                        <input class="input" type="text"  name="preset_title" id="preset_title">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="creator">Creator</label>

                    <div class="control">
                        <input class="textarea" name="creator" value="{{ Auth::user()->name}}" id="creator">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Category</label>

                    <div class="control">
                    <select  name="categories">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</opition>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection