<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ethereal</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{asset('css/layout.css')}}" rel="stylesheet">
        <link href="{{asset('css/content.css')}}" rel="stylesheet">
        @yield ('sign-css')
    </head>

    <body>
        <div class="nav">
            <div class="nav-menu">
                <div class="nav-menu-btn"></div>
            </div>

            <div class="nav-logo">
                <a href="{{ url('/')}}"><img src="{{asset('img/ethereal-logo.png')}}"></a>
            </div>

            <div class="nav-list">
                <div class="nav-list_items">
                    <li><a href="{{route('plugins')}}">Plugins</a></li>
                    <li><a href="{{route('packs')}}">Packs</a></li>
                    <li><a href="{{route('community')}}">Community</a></li>
                    <li><a href="{{route('support')}}">Support</a></li>
                </div>
                <div class="nav-list_icons">
                    <li><a href="#"><img src="{{asset('img/cart-icon.png')}}"></a></li>
                    @guest
                    <li><a href="{{route('login')}}"><img src="{{asset('img/account-icon.png')}}"></a></li>
                    @else
                    <li class="dropdown"><a href="{{route('login')}}"><img src="{{asset('img/account-icon.png')}}"></a>
                        <div class="nav-dropdown-cont">
                                <a href="{{ route('login')}}">Account</a>
                            <div>
                                <a href="{{ route('logout') }}"onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </li>
                    @endguest
                </div>
            </div>
        </div>

        <div class="wrapper">
        @yield ('plugins')

        @yield ('content')

        @yield ('plugin-reflection')
        </div>

        <div class="footer">
            <div class="footer-left">
                <h1>Shop & Services</h1>
                <a href="">Shop Info & FAQ</a>
                <a href="">My Account</a>
                <a href="">Support</a>
                <a href="">Product Help Files</a>
            </div>

            <div class="footer-center">
                <h1>Company</h1>
                <a href="">About Ethereal</a>
                <a href="">Contact Us</a>
            </div>

            <div class="footer-right">
                <h1>Subscribe to our newsletter</h1>
                <input value="Email Adress" name="subscribe"><button>Subscribe</button>
                <h2>Follow Us</h2>
                <div class="footer-icons">
                    <a href=""><img src="{{asset('img/facebook-icon.png')}}"></a>
                    <a href=""><img src="{{asset('img/twitter-icon.png')}}"></a>
                    <a href=""><img src="{{asset('img/instagram-icon.png')}}"></a>
                    <a href=""><img src="{{asset('img/youtube-icon.png')}}"></a>
                </div>
            </div>
        </div>
        <div class="footer-btm">
            <p>Copyright © 2020 Ethereal. All rights reserved</p>
            <a href="">Terms of use</a> | 
            <a href="">Privacy Policy</a> | 
            <a href="">Cookies Policy</a> | 
            <a href="">License Agreement</a>
        </div>

        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
