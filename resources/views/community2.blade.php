@extends('layout')

@section('content')
    <div class="cmn-cont">
        <div class="cmn-cont_tables">
            <div class="cmn-cont_title">
                <h2>Ascend</h2>
                @guest
                <a></a>
                @else
                <a href="{{ route('upload_preset')}}">Upload Preset</a>
                @endguest
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
                <!-- @foreach ($presets as $preset) -->
                <tr>
                    <td class="cmn-tbl-fav">
                        @guest
                        <img class="icon-grey" src="{{ asset('img/favorite-icon.png')}}">
                        @else
                        <img src="{{ asset('img/favorite-icon.png')}}">
                        @endguest
                    </td>
                    <!-- <td class="cmn-tbl-pt">{{ $preset->preset_title }}</td>
                    <td class="cmn-tbl-crt">{{ $preset->creator }}</td>
                    <td class="cmn-tbl-ctg">{{ $preset->category }}</td> -->
                    <td class="cmn-tbl-like">
                        @guest
                        <img class="icon-grey" src="{{ asset('img/like-icon.png')}}"></td>
                        @else
                        <img src="{{ asset('img/like-icon.png')}}"></td>
                        @endguest
                    <td class="cmn-tbl-dwnl">
                        @guest
                        <img class="icon-grey" src="{{ asset('img/download-icon.png')}}">
                        @else
                        <img src="{{ asset('img/download-icon.png')}}">
                        @endguest
                    </td>
                </tr>
                <!-- @endforeach -->
            </table>
        </div>
    </div>
@endsection