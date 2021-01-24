<?php

namespace App\Http\Controllers;

use App\Models\Role;
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
    public function show()
    {
        return view('auth.dashboard.dashboard');
    }

    public function showEA()
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
        $users = User::all();
        return view('auth.dashboard.admin', ['users' => $users]);
    }

    public function showEdit()
    {
        return view('auth.dashboard.edit');
    }

    public function update(User $user)
    {
        $attributes = request()->validate([

            'name' => ['string', 'required', 'max:255'],
            'email' => [
                'string',
                'required',
                'email',
                'max:255',
            ],
            'password' => [
                'string',
                'required',
                'min:8',
                'max:255',
                'confirmed',
            ],
        ]);

       $user->update($attributes);

        return redirect('/edit-account');
    }

    public function showNP()
    {
        return view('no-permission');
    }
}
