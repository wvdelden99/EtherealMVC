@extends ('layout')
@section ('content')
    <div class="plg-cont-top">
        <img class="plg-cont-top_img" src="img/reflection.jpg">

        <div class="plg-cont-top-right">
            <div class="plg-cont-top_title-box">
                <div class="plg-cont-top_title">
                    <img src="img/reflection-icon.png">
                    <h1>reflection</h1>
                </div>
                <div class="plg-cont-top_btn">
                    <a href="#mid3"><button class="plg-cont-top-bn_btn">Buy Now</button></a>
                    <a href="#mid3"><button class="plg-cont-top-tn_btn">Try Now</button></a>
                </div>
            </div>

            <div class="plg-cont-top_arwdwn">
                <a href="#mid1"><img src="img/arrow-down-icon.png"></a>
            </div>
        </div>
    </div>

    <div class="plg-cont-mid">
        <div class="plg-cont-mid1 fade-in" id="mid1">
            <div class="plg-cont-mid1_txt">
                <h1>See what you compress</h1>
                <p>A compression tool that gives you a
                better and clearer view of what is being
                compressed</p>
            </div>
            <div class="plg-cont-mid1_img">
                <img src="img/reflection-plugin.png">
            </div>
        </div>

        <div class="plg-cont-mid2 fade-in">
            <div class="plg-cont-mid2_colm">
                <img src="img/reflection-different-views.png">
                <h1>Switch easy between views</h1>
                <p>Switch easy between the spectrum view or
                the compression view to what you are
                compressing in a instant</p>
            </div>
            <div class="plg-cont-mid2_colm">
                <img src="img/reflection-simple-interface.png">
                <h1>Simple to use interface</h1>
                <p>An easy to use interface with 
                a modern design</p>
            </div>
            <div class="plg-cont-mid2_colm">
                <img src="img/reflection-change-visuals.png">
                    <h1>Change with visuals</h1>
                    <p>Use the visualizers to chnage the 
                    values for an easier and better workflow</p>
            </div>
        </div>

        <div class="plg-cont-mid3 fade-in" id="mid3">
            <div class="plg-cont-mid3_txt">
                <h1>Buy seperate or safe with a bundle</h1>
                <p>Reflection can be bought seperate or in bundle with other plugins</p>
                <button>See Other Products</button>
            </div>
            <div class="plg-cont-mid3-option">
                <div class="plg-cont-mid3-box">
                    <img src="img/creation-bundle-icon.png">
                    <h1 class="plg-cont-mid3_title">reflection</h1>
                    <h1 class="plg-cont-mid3-price">$75</h1>
                    <button>Add to Cart</button>
                </div>
                <div class="plg-cont-mid3-box">
                    <img src="img/creation-bundle-icon.png">
                    <h1 class="plg-cont-mid3_title">effects bundle</h1>
                    <a href="">View More</a>
                    <h1 class="plg-cont-mid3-price">$250</h1>
                    <button>Add to Cart</button>
                </div>
                <div class="plg-cont-mid3-box">
                    <img src="img/creation-bundle-icon.png">
                    <h1 class="plg-cont-mid3_title">creation bundle</h1>
                    <a href="">View More</a>
                    <h1 class="plg-cont-mid3-price">$500</h1>
                    <button>Add to Cart</button>
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