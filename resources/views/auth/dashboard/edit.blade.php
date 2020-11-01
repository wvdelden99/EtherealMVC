@extends('layouts.dashboard-layout')

@section('dashboard-content')
    <div class="dashboard-cont">
        <form method="POST" action="{{ route('edit-account')}}">
            @csrf
            @method('PATCH')

            <label for="name">Name</label>
                <input type="text" id="name" name="name" value="john" autofocus required>

            <label for="email">Email</label>
                <input type="email" id="email" name="email" value="henk@mail.com" required>

            <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

            <label for="password_confirmation">Password Confirm</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>

            <button type="Submit">Submit</button>
        </form>
    </div>
@endsection