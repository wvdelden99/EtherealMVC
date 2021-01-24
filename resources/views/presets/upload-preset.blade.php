@extends('layouts.layout')

@section('title')
    <title>Ethereal - Upload Preset</title>
@endsection

@section('content')
    <div class="cmnup-cont">
        <div class="cmnup-cont_form">

        <form method="POST" action="{{ route('community')}}">
            @csrf
                <input type="hidden" name="fav" id="fav" value="0">
                <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id}}">
            <label for="preset_title">Preset Title</label>
                <input class="@error('preset_title') error_input @enderror" type="text"  name="preset_title" id="preset_title" value="{{ old('preset_title')}}" autofocus requireds>
                    @error('preset_title')
                        <p class="error">{{ $message }}</p>
                    @enderror

                <input type="hidden" name="creator" id="creator" value="{{Auth::user()->name}}">

            <label for="category">Category</label>
                <select class="@error('preset_title') error_select @enderror" name="category" id="category" required>
                        <option disabled selected value>-----Select Option-----</option>
                    @foreach($categories as $category)
                        <option value="{{$category->name}}">{{$category->name}}</opition>
                    @endforeach
                </select>
                    @error('category')
                        <p class="error">{{ $message }}</p>
                    @enderror

                <button class="button is-link" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection