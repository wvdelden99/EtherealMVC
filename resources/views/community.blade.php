@extends('layouts.layout')

@section('title')
    <title>Ethereal - Community</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection

@section('content')
    <div id="notifDiv"></div>

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
                        <input type="checkbox" class="toggle-class" data-id="{{ $preset->id }}" data-toggle="toggle" data-style="slow" data-on="Favorite" data-off="UnFav" {{ $preset->status == true ? 'checked' : ''}}>
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
@endsection

@push('scripts')
    <script>
        $(function() {
            $('#toggle-two').bootstrapToggle({
            on: 'Enabled',
            off: 'Disabled'
            });
        })

        $('.toggle-class').on('change', function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id');
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: 'changeStatus',
                data: {
                    'status': status,
                    'id': id
                },
                success:function(data) {
                    $('#notifDiv').fadeIn();
                    $('#notifDiv').css('background', 'green');
                    $('#notifDiv').text('Status Updated Successfully');
                    setTimeout(() => {
                        $('#notifDiv').fadeOut();
                    }, 3000);
                }
            });
        });
    </script>  
@endpush