@extends('layouts.layout')

@section('title')
    <title>Ethereal - Community</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
@endsection

@section('content')
    <div class="cmn-cont">
        <div class="cmn-cont_tables">
            <div class="cmn-cont_title">
                <h2>Upload</h2>
                @guest
                <a></a>
                @else
                <a href="{{ route('upload-preset')}}">Upload Preset</a>
                @endguest
            </div>
            <form action="{{ route('community')}}" class="cmn-cont_form">
                    <label>Filter</label>
                    <select name="sort" onchange="this.form.submit()">
                        <option>Top Rated</option>
                        <option value="new">New</option>
                        <option>Favorites</option>
                        <option value="atoz">A to Z</option>
                        <option value="ztoa">Z to A</option>
                    </select>
                    <input type="text" placeholder="Search.." name="s" value="{{ isset($s) ? $s : ''}}">
                    <button type="submit"><img src="{{ asset('img/search-icon.png')}}"></button>
                </form>
            <table>
                <tr>
                    <th class="cmn-tbl-fav cmn-th-fav"></th>
                    <th class="cmn-tbl-pt cmn-th-pt">Preset Title</th>
                    <th class="cmn-tbl-crt cmn-th-crt">Creator</th>
                    <th class="cmn-tbl-ctg cmn-th-ctg">Category
                        <form action="{{ route('community')}}">
                            <select name="sort" onchange="this.form.submit()">
                                    <option>All</option>
                                @foreach($categories as $category)
                                    <option value="category">{{ $category->name}}</opition>
                                @endforeach
                            </select>
                        </form>
                    </th>
                    <th class="cmn-tbl-like"></th>
                    <th class="cmn-tbl-dwnl"></th>
                </tr>
                @forelse ($presets as $preset)
                <tr>
                    <td class="cmn-tbl-fav">
                        @guest
                        <img class="icon-grey" src="{{ asset('img/favorite-icon.png')}}">
                        @else
                        <!-- <form id="register">
                            <button type="submit">getRequest</button>
                        </form> -->
                        <input data-id="{{$preset->fav}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $preset->status ? 'checked' : '' }}>
                        @endguest
                    </td>
                    <td class="cmn-tbl-pt">{{$preset->preset_title}}</td>
                    <td class="cmn-tbl-crt">{{$preset->creator}}</td>
                    <td class="cmn-tbl-ctg">{{$preset->category}}</td>
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
                @empty
                <tr>
                    <td class="cmn-tbl-fav"></td>
                    <td class="cmn-tbl-pt">No Matching Results</td>
                    <td class="cmn-tbl-crt"></td>
                    <td class="cmn-tbl-ctg"></td>
                    <td class="cmn-tbl-like"></td>
                    <td class="cmn-tbl-dwnl"></td>
                </tr>
                @endforelse
            </table>
        </div>
    </div>

    <script type="text/javascript">
    $(function() {
        $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0; 
            var fav = $(this).data('fav'); 
            
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/changeStatus',
                data: {'status': status, 'fav': fav},
                success: function(data){
                console.log(data.success)
                }
            });
        })
    })
    </script>
@endsection