@extends('layouts.layout')

@section('title')
    <title>Ethereal - Storm</title>
@endsection

@section('content')
    <div class="plg-cont-top">
        <img class="plg-cont-top_img-effect" src="{{asset('img/storm-effect-bg.png')}}">
        <div class="plg-cont-top_img">
            <img src="{{asset('img/reflection-plugin-render2.png')}}">
        </div>
        <div class="plg-cont-top_title-box">
            <div class="plg-cont-top_row">
                <div class="plg-cont-top_title">
                    <img src="{{asset('img/storm-icon.png')}}">
                    <h1>storm</h1>
                </div>
                <div class="plg-cont-top_btn">
                    <a href="#mid3"><button class="plg-cont-top-bn_btn asc-bn">Buy Now</button></a>
                    <a href="#mid3"><button class="plg-cont-top-tn_btn asc-tn">Try Now</button></a>
                </div>
            </div>
        </div>
        <div class="plg-cont-top_arwdwn">
            <a href="#mid1"><img src="{{asset('img/arrow-down-icon.png')}}"></a>
        </div> 
    </div>

    <div class="plg-cont-mid">
        <div class="plg-cont-mid1 fade-in" id="mid1">
            <div class="plg-cont-mid1_txt">
                <h1>Lorem ipsum dolor sit</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Maecenas vitae blandit ipsum. Aliquam laoreet lacus lectus</p>
            </div>
            <div class="plg-cont-mid1_img">
                <img src="{{asset('img/reflection-plugin.png')}}">
            </div>
        </div>
        
        <div class="plg-cont-mid2 fade-in">
            <div class="plg-cont-mid2_colm">
                <img src="{{asset('img/reflection-different-views.png')}}">
                <div class="plg-cont-mid2_txt">
                    <h1>Lorem ipsum dolor sit</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                       Aenean id nisi rhoncus leo fringilla pretium et eget mauris</p>
                </div>
            </div>
            <div class="plg-cont-mid2_colm">
                <img src="{{asset('img/reflection-simple-interface.png')}}">
                <div class="plg-cont-mid2_txt">
                    <h1>Lorem ipsum dolor sit</h1>
                    <p>Lorem ipsum dolor sit amet, 
                    consectetur adipiscing elit. Nulla</p>
                </div>
            </div>
            <div class="plg-cont-mid2_colm">
                <img src="{{asset('img/reflection-change-visuals.png')}}">
                <div class="plg-cont-mid2_txt">
                    <h1>Lorem ipsum dolor sit</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Sed pulvinar condimentum purus, vel</p>
                </div>
            </div>
        </div>

        <div class="plg-cont-mid3 fade-in" id="mid3">
            <div class="plg-cont-mid3_txt-box">
                <div class="plg-cont-mid3_txt">
                    <h1>Buy seperate or safe with a bundle</h1>
                    <p>Storm can be bought seperate or in bundle with other plugins</p>
                </div>
                <a href="{{route('plugins')}}"><button>See Other Products</button></a>
            </div>
            <div class="plg-cont-mid3-option">
                <div class="plg-cont-mid3-box">
                    <div class="plg-cont-mid3-top">
                        <img src="{{asset('img/storm-icon-000.png')}}">
                        <h1 class="plg-cont-mid3_title">Storm</h1>
                    </div>
                    <h1 class="plg-cont-mid3-price pcmp"><span>$</span>75</h1>
                    <div class="plg-cont-mid3_btn pcmb">
                        <button class="plg-cont-mid3_btn-tff">Try for Free*</button>
                        <button class="plg-cont-mid3_btn-atc">Add to Cart</button>
                    </div>
                </div>
                <div class="plg-cont-mid3-box">
                    <div class="plg-cont-mid3-top">
                        <img src="{{asset('img/effects-bundle-icon.png')}}">
                        <h1 class="plg-cont-mid3_title">effects bundle</h1>
                    </div>
                    <a href="">View More</a>
                    <h1 class="plg-cont-mid3-price"><span>$</span>250</h1>
                    <div class="plg-cont-mid3_btn">
                        <button class="plg-cont-mid3_btn-atc">Add to Cart</button>
                    </div>
                </div>
                <div class="plg-cont-mid3-box">
                    <div class="plg-cont-mid3-top">
                        <img src="{{asset('img/creation-bundle-icon.png')}}">
                        <h1 class="plg-cont-mid3_title">creation bundle</h1>
                    </div>
                    <a href="">View More</a>
                    <h1 class="plg-cont-mid3-price"><span>$</span>500</h1>
                    <div class="plg-cont-mid3_btn">
                        <button class="plg-cont-mid3_btn-atc">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="plg-cont-btm">
        <h1>System Requirments</h1>
        <h2>Operating Systems:</h2>
        <p>Mac: OS X 10.11 El Captain - macOS 10.15 Catalina</p>
        <p>PC: Win 7 64-bit (Latest Service Packs) - Win 10</p>
        <h2>Plugin Formats:</h2>
        <p>AAX, VST 2, VST 3, AU</p>
        <h2>Supported Hosts:</h2>
        <p>Ableton Live 10, FL Studio 20, Komplete Kontrol, MASCHINE 2, REAPER 5</p>
    </div>
@endsection