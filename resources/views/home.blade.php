@extends ('layout')
@section ('plugins')
    <div class="cont-top">
        <div class="cont-top_img">
            <img src="{{asset('img/ethereal-logo.png')}}">
            <h1>Design sounds like never before</h1>
        </div>
        <video autoplay muted loop>
            <source src="{{asset('img/reflection-plugin-vid.mp4')}}" type="video/mp4">
        </video>

    </div>

    <div class="cont-mid">
    </div>

@endsection