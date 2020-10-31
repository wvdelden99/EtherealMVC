@extends('layouts.layout')

@section('title')
    <title>Ethereal - Upload Preset</title>
@endsection

@section('content')
    <div class="cmnup-cont">
        <div class="cmnup-cont_form">
            <form method="POST" action="{{ route('community')}}">
                @csrf
                    <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id}}" required>

                <label for="preset_title">Preset Title</label>
                    <input class="@error('preset_title') error-inp @enderror" type="text"  name="preset_title" id="preset_title" value="{{ old('preset_title')}}">
                    @error('preset_title')
                        <p class="error">{{ $message }}</p>
                    @enderror


                    <input class="textarea" type="hidden" name="creator" id="creator" value="{{ auth::user()->name}}" required>
                    
                <label for="category">Category</label>
                    <select  name="categories">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</opition>
                        @endforeach
                    </select>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection