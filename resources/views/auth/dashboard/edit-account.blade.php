@extends('layouts.dashboard-layout')

@section ('title')
    <title>Ethereal - {{ Auth::user()->name }} Account Overview</title>
@endsection

@section('dashboard-content')
    <div class="dashboard-cont">
        <h1>Edit Account</h1>
        <form method="POST" action="{{ route('edit-account')}}" class="dashboard-cont-box">
            @csrf
            @method('PATCH')

            <div class="dashboard-row">
                <div class="dashboard-row-header">
                    <label for="name">Personal Information</label>
                </div>
                <div class="dashboard-row-cont">
                    <div class="dashboard-data">
                        <p>{{ Auth::user()->name }}</p>
                        <button class="edit_btn" type="button" >Edit</button>
                    </div>
                    <div class="dashboard-edit">
                        <input type="text" name="name" id="name" placeholder="{{ Auth::user()->name }}">
                        <div class="dashboard-btn">
                            <button class="submit-btn" type="submit">Save Changes</button>
                            <button class="alt-btn" type="button">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dashboard-row">
                <div class="dashboard-row-header">
                    <label>Email & Password</label>
                </div>
                <div class="dashboard-row-cont">
                    <div class="dashboard-data2">
                        <p>{{ Auth::user()->email }}</p>
                        <button class="edit_btn2" type="button" >Edit</button>
                    </div>
                    <div class="dashboard-edit2">
                        <input type="email" name="email" id="email" placeholder="{{ Auth::user()->email }}">
                        <div class="dashboard-btn">
                            <button class="submit-btn" type="submit">Save Changes</button>
                            <button class="alt-btn2" type="button">Cancel</button>
                        </div>
                    </div>
                </div>
                <div class="dashboard-row-cont">
                    <div class="dashboard-data3">
                        <p>******</p>
                        <button class="edit_btn3" type="button" >Edit</button>
                    </div>
                    <div class="dashboard-edit3">
                        <input type="password" id="password" name="password">
                        <input type="password" id="password_confirmation" name="password-confirmation">
                        <div class="dashboard-btn">
                            <button class="submit-btn" type="submit">Save Changes</button>
                            <button class="alt-btn3" type="button">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dashboard-row">
                <div class="dashboard-row-header">
                    <label>Billing & Shipping Information</label>
                </div>
                <div class="dashboard-row-cont">
                    <div class="dashboard-data">
                        <p></p>
                        <button class="edit_btn" type="button" >Edit</button>
                    </div>
                    <div class="dashboard-edit">
                        <div class="dashboard-btn">
                            <button class="submit-btn" type="submit">Save Changes</button>
                            <button class="alt-btn3" type="button">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection