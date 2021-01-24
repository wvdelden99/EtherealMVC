@extends('layouts.dashboard-layout')

@section('title')
    <title>Ethereal - Admin Tab</title>
@endsection

@section('dashboard-content')
    <div class="dashboard-cont">
        <h1>Admin Tab</h1>
        <table class="admin-tbl">
                <tr>
                    <th class="adm-tl1">Name</th>
                    <th class="adm-tl2">Email</th>
                    <th class="adm-tl3">User</th>
                    <th class="adm-tl3">Buyer</th>
                    <th class="adm-tl3">Admin</th>
                    <th class="adm-tl4"></th>
                </tr>
            @foreach($users as $user)
            <form class="admin-cont" action="{{ route('reflection') }}" method="post">
                <tr>
                    <td class="adm-td1">{{ $user->name }}</td>
                    <td class="adm-td2">{{ $user->email }} <input type="hidden" name="email" value="{{ $user->email }}"></td>
                    <td class="adm-td3"><input type="checkbox" {{ $user->hasRole('User') ? 'checked' : '' }} name="role_user"></td>
                    <td class="adm-td3"><input type="checkbox" {{ $user->hasRole('Buyer') ? 'checked' : '' }} name="role_buyer"></td>
                    <td class="adm-td3"><input type="checkbox" {{ $user->hasRole('Admin') ? 'checked' : '' }} name="role_admin"></td>
                    {{ csrf_field() }}
                    <td class="adm-td4"><button type="submit" class="">Change Role</button>
                </tr>
            </form>
            @endforeach
        </table>
    </div>
@endsection