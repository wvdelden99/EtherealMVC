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

                <div class="field">
                    <label class="label" for="preset_title">Preset Title</label>

                    <div class="control">
                        <input class="input" type="text"  name="preset_title" id="preset_title">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="creator">Creator</label>

                    <div class="control">
                        <input class="input" type="hidden" name="creator" id="creator" value="{{ Auth::user()->name }}"></input>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="category">Category</label>

                    <select name="category" id="category">
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