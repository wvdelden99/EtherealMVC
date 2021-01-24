@extends('layouts.dashboard-layout')

@section('title')
    <title>Ethereal - Admin Tab</title>
@endsection

@section('dashboard-content')
    <div class="dashboard-cont">
        <h1>Admin Tab</h1>
        <table class="admin-tbl">
                <tr>
                    <th class="tbl-flx5">Name</th>
                    <th class="tbl-flx40">Email</th>
                    <th class="tbl-flx10">User</th>
                    <th class="tbl-flx10">Buyer</th>
                    <th class="tbl-flx10">Admin</th>
                    <th class="tbl-flx25"></th>
                </tr>
            @foreach($users as $user)
            <form class="admin-cont" action="{{ route('reflection') }}" method="post">
                <tr>
                    <td class="tbl-flx20">{{ $user->name }}</td>
                    <td class="tbl-flx30">{{ $user->email }} <input type="hidden" name="email" value="{{ $user->email }}"></td>
                    <td class="tbl-flx10"><input type="checkbox" {{ $user->hasRole('User') ? 'checked' : '' }} name="role_user"></td>
                    <td class="tbl-flx10"><input type="checkbox" {{ $user->hasRole('Buyer') ? 'checked' : '' }} name="role_buyer"></td>
                    <td class="tbl-flx10"><input type="checkbox" {{ $user->hasRole('Admin') ? 'checked' : '' }} name="role_admin"></td>
                    {{ csrf_field() }}
                    <td class="tbl-flx15"><button type="submit" class="">Change Role</button>
                    <td class="tbl-flx5"><a href=""><img src="{{ asset('img/icon/cross-icon.png')}}"></a></td>
                </tr>
            </form>
            @endforeach
        </table>
    </div>
@endsection