@extends('layout')

@section('content')
    <div class="cmnup-cont">
        <div class="cmnup-cont_form">
            <h1>Upload Ascend Preset</h1>
            <form action="">
                <label for="preset_title">Preset Title</label>
                <input type="text" name="preset_title" id="preset_title">
                <label for="creator">Creator</label>
                <input type="text" name="creator" id="creator">
                <label for="category">Category</label>
                <input type="text" name="category" id="category">
                <button type="submit">Upload</button>
            </form>
        </div>
    </div>
@endsection