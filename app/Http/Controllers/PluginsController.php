<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class PluginsController extends Controller
{
    public function show()
    {
      return view ('plugins');
    }

    //Plugins
    public function showAscend()
    {
      return view ('plugins.ascend');
    }
    public function showCreation()
    {
      return view ('plugins.creation');
    }
    public function showEcho()
    {
      return view ('plugins.echo');
    }
    public function showReflection()
    {
      $users = User::all();
      return view ('plugins.reflection', ['users' => $users]);
    }

    public function store(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        $user->roles()->detach();
        if ($request['role_user']) {
            $user->roles()->attach(Role::where('name', 'User')->first());
        }
        if ($request['role_buyer']) {
            $user->roles()->attach(Role::where('name', 'Buyer')->first());
        }
        if ($request['role_admin']) {
            $user->roles()->attach(Role::where('name', 'Admin')->first());
        }
        return redirect()->back();
    }

    public function showSky()
    {
      return view ('plugins.sky');
    }
    public function showSpace()
    {
      return view ('plugins.space');
    }
    public function showStorm()
    {
      return view ('plugins.storm');
    }
}
