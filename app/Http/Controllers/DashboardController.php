<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function update(User $user)
    {
        $attributes = request()->validate([
            'name' => ['string', 'max:255'],
            'email' => ['string', 'email', 'max:255'],
            'password' => ['string', 'min:8', 'max:255', 'confirmed']
        ]);

        $user->update($attributes);

        return redirect('/edit-account');
    }
}
