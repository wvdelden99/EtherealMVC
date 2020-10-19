@extends('layout')

@section('content')
    <div class="cmn-cont">
        <div class="cmn-cont_tables">
            <div class="cmn-cont_title">
                <h2>Ascend</h2>
                <!-- @guest
                @else -->
                <a href="">Upload Preset</a>
                <!-- @endguest -->
            </div>
                <form class="cmn-cont_form">
                    <label>Filter</label>
                    <select>
                        <option>Top Rated</option>
                        <option>New</option>
                        <option>Favorites</option>
                        <option>A to Z</option>
                        <option>Z to A</option>
                    </select>
                    <input type="text" placeholder="Search.." name="search">
                    <button><img src="{{ asset('img/search-icon.png')}}"></button>
                </form>
            <table>
                <tr>
                    <th class="cmn-tbl-fav cmn-th-fav"></th>
                    <th class="cmn-tbl-pt cmn-th-pt">Preset Title</th>
                    <th class="cmn-tbl-crt cmn-th-crt">Creator</th>
                    <th class="cmn-tbl-ctg cmn-th-ctg">Category <img src="{{ asset('img/arrow-down-2-icon.png')}}"></th>
                    <th class="cmn-tbl-like"></th>
                    <th class="cmn-tbl-dwnl"></th>
                </tr>
                <!-- @foreach -->
                <tr>
                    <td class="cmn-tbl-fav">
                        <!-- @guest
                        <img class="icon-grey" src="{{ asset('img/favorite-icon.png')}}">
                        @else -->
                        <img src="{{ asset('img/favorite-icon.png')}}">
                        <!-- @endguest -->
                    </td>
                    <td class="cmn-tbl-pt"></td>
                    <td class="cmn-tbl-crt"></td>
                    <td class="cmn-tbl-ctg"></td>
                    <td class="cmn-tbl-like">
                        <!-- @guest
                        <img class="icon-grey" src="{{ asset('img/like-icon.png')}}"></td>
                        @else -->
                        <img src="{{ asset('img/like-icon.png')}}"></td>
                        <!-- @endguest -->
                    <td class="cmn-tbl-dwnl">
                        <!-- @guest
                        <img class="icon-grey" src="{{ asset('img/download-icon.png')}}">
                        @else -->
                        <img src="{{ asset('img/download-icon.png')}}">
                        <!-- @endguest -->
                    </td>
                </tr>
                <!-- @endforeach -->
            </table>
        </div>

        <div class="cmn-cont_tables">
            <h2>Creation</h2>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Maker</th>
                    <th>Likes</th>
                    <th>Favorite</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
@endsection