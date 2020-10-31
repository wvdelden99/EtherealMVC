<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('auth.dashboard.dashboard');
    }

    public function show()
    {
        return view('auth.dashboard.edit-account');
    }
    public function showPH()
    {
        return view('auth.dashboard.purchase-history');
    }
    public function showPW()
    {
        return view('auth.dashboard.presets-and-wishlist');
    }
    public function showAdmin()
    {
        return view('auth.dashboard.admin');
    }
}
