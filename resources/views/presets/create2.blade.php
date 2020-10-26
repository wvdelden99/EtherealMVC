@extends('layout')

@section('title')
    <title>Ethereal - Upload Preset</title>
@endsection

@section('content')
    <div class="cmnup-cont">
        <div class="cmnup-cont_form">
            <h1>Upload Ascend Preset</h1>
            <form method="POST" action="{{ route('community')}}">
                @csrf

                <label for="preset_title">Preset Title</label>
                    <input class=" @error('preset_title') error-inp @enderror" type="text" name="preset_title" id="preset_title" value="{{old('preset_title')}}">
                    @error('preset_title')
                    <p class="error">{{ $errors->first('preset_title')}}</p>
                    @enderror
                    
                <label for="creator">Creator</label>
                    <input class=" @error('creator') error-inp @enderror" type="text" name="creator" id="creator" value="{{old('creator')}}">
                    @error('creator')
                    <p class="error">{{ $errors->first('creator')}}</p>
                    @enderror

                <label for="creator">Category</label>
                    <input class=" @error('category') error-inp @enderror" type="text" name="category" id="category" value="{{old('category')}}">
                    @error('category')
                    <p class="error">{{ $errors->first('category')}}</p>
                    @enderror

                <!-- <label for="category">Category</label>
                    <select class=" @error('category') error-inp @enderror" name="category" value="{{old('category')}}">
                        <option disabled selected value> -- Select an Option -- </option>
                        <option disabled>-----Bass-----</option>
                        <option>Bass (Guitar)</option>
                        <option>Bass (Synth)</option>
                        <option>Sub</option>
                        <option disabled>-----Drums-----</option>
                        <option>808</option>
                        <option>Kick</option>
                        <option>Clap</option>
                        <option>Cymbals</options>
                        <option>Snares</options>
                        <option>Percussion</option>
                        <option disabled>-----Guitar-----</option>
                        <option>Guitar (Acoustic)</option>
                        <option>Guitar (Electric)</option>
                        <option disabled>-----Other-----</option>
                        <option>Other</option>
                        <option>SFX</option>
                        <option disabled>-----Other Instruments-----</option>
                        <option>Chords</option>
                        <option>Keys</option>
                        <option>Leads</option>
                        <option>Other Instruments</option>
                        <option>Synths</option>
                        <option disabled>-----Vocals-----</option>
                        <option>Lead Vocal</option>
                        <option>Vocoder</option>
                        <option>Vocal Chops</option>
                    </select>
                    @error('category')
                    <p class="error">{{ $errors->first('catergory')}}</p>
                    @enderror -->

                <button type="submit">Upload</button>
            </form>
        </div>
    </div>
@endsection