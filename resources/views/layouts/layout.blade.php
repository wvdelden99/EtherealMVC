<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            @yield ('title')

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">

        <link href="{{ asset('css/layout.css')}}" rel="stylesheet">
        <link href="{{ asset('css/content.css')}}" rel="stylesheet">
            @yield ('css')
    </head>

    <body>
        <nav class="nav">
            <div class="nav-menu">
                <div class="nav-menu-btn"></div>
            </div>

            <div class="nav-logo">
                <a href="{{ url('/')}}"><img src="{{ asset('img/ethereal-logo.png')}}"></a>
            </div>

            <div class="nav-list">
                <div class="nav-list_items">
                    <li><a href="{{ route('plugins')}}">Plugins</a></li>
                    <li><a href="{{ route('packs')}}">Packs</a></li>
                    <li><a href="{{ route('community')}}">Community</a></li>
                    <li><a href="{{ route('support')}}">Support</a></li>
                </div>
                <div class="nav-list_icons">
                    <li><a href="#"><img src="{{asset('img/icon/cart-icon-f0f0f0.png')}}"></a></li>
                    @guest
                    <li><a href="{{ route('login')}}"><img src="{{asset('img/icon/account-icon-f0f0f0.png')}}"></a></li>
                    @else
                    <li><a class="nav-list_icon-item"><img src="{{asset('img/icon/account-icon-f0f0f0.png')}}"></a></li>
                    @endguest
                </div>
            </div>
        </nav>

        <div class="sidenav">
            <div class="sidenav-cont">
                <div class="sidenav-cont-top">
                    <li class="{{ Request::path() === 'plugins' ? 'sidenav-active' : ''}}"><a href="{{ route('plugins')}}">Plugins</a></li>
                    <li class="{{ Request::path() === 'packs' ? 'sidenav-active' : ''}}"><a href="{{ route('packs')}}">Packs</a></li>
                    <li class="{{ Request::path() === 'community' ? 'sidenav-active' : ''}}"><a href="{{ route('community')}}">Community</a></li>
                    <li class="{{ Request::path() === 'support' ? 'sidenav-active' : ''}}"><a href="{{ route('support')}}">Support</a></li>
                </div>
                <div class="sidenav-cont-btm">
                    <div class="sidenav-socials">
                        <a href=""><img src="{{ asset('img/icon/socials/facebook-icon-757575.png')}}"></a>
                        <a href=""><img src="{{ asset('img/icon/socials/twitter-icon-757575.png')}}"></a>
                        <a href=""><img src="{{ asset('img/icon/socials/instagram-icon-757575.png')}}"></a>
                        <a href=""><img src="{{ asset('img/icon/socials/youtube-icon-757575.png')}}"></a>
                    </div>
                    <div class="sidenav-copyright">
                        <p>© 2020 Ethereal</p>
                    </div>
                </div>
            </div>
            <div class="sidenav-transparent"></div>
        </div>

        @guest
        @else
        <div class="dropdown">
            <div class="dropdown_img">
                <img src="img/triangle.png">
            </div>
            <div class="dropdown-cont">
                <div class="dropdown-user-data">
                    <h1>{{ Auth::user()->name }}</h1>
                    <h2>{{ Auth::user()->email }}</h2>
                </div>
                <div class="dropdown_list-items">
                    <a href="{{ route('login')}}">View Your Account</a>
                    <a href="{{ route('edit-account')}}">Edit Account</a>
                    <a href="{{ route('purchase-history')}}">Purchase History</a>
                    <a href="{{ route('presets-and-wishlist')}}">Presets & Wishlist</a>
                    @if(Auth::user()->hasRole('Admin'))
                    <a href="{{ route('admin')}}">Admin Tab</a>
                    @endif
                </div>
                <div class="dropdown-signout">
                    <a class="nav-ddc_link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign Out<img src="{{ asset('img/icon/sign-out-icon-f0f0f0.png')}}"></a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                    </form>
                </div>
            </div>
        </div>
        @endguest

        <div class="wrapper">
            @yield ('content')
        </div>

        <footer>
            <div class="footer-top">
                <div class="footer-left">
                    <div class="footer_colm">
                        <div class="footer-cont">
                            <h1>Shop & Services</h1>
                                <li><a href="">Shop Info & FAQ</a></li>
                                <li><a href="{{ route('login')}}">My Account</a></li>
                                <li><a href="{{ route('support')}}">Support</a></li>
                                <li><a href="">Product Help Files</a></li>
                        </div>
                    </div>
                    <div class="footer_colm">
                        <div class="footer-cont">
                            <h1>Company</h1>
                                <li><a href="">About Ethereal</a></li>
                                <li><a href="">Contact Us</a></li>
                        </div>
                    </div>
                </div>
                <div class="footer-right footer_colm">
                    <div class="footer-cont">
                        <h1>Subscribe to our newsletter</h1>
                        <div class="footer_input">
                            <input type="text" placeholder="Email Adress" name="subscribe">
                            <button>Subscribe</button>
                        </div>
                        <h1>Follow Us</h1>
                        <div class="footer_icons">
                            <a href=""><img src="{{ asset('img/icon/socials/facebook-icon-151515.png')}}"></a>
                            <a href=""><img src="{{ asset('img/icon/socials/twitter-icon-151515.png')}}"></a>
                            <a href=""><img src="{{ asset('img/icon/socials/instagram-icon-151515.png')}}"></a>
                            <a href=""><img src="{{ asset('img/icon/socials/youtube-icon-151515.png')}}"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-btm">
                <p>Copyright © 2020 Ethereal. All rights reserved</p>
                <div class="footer-btm-cont">
                    <li><a href="">Terms of use</a></li>
                    <li class="footer_list-item"><a href="">Privacy Policy</a></li>
                    <li class="footer_list-item"><a href="">License Agreement</a></li>
                </div>
            </div>
        </footer>

        <script src="{{asset('js/main.js')}}">

        </script>
    </body>
</html>