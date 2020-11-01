<?php

namespace App\Http\Controllers;

use App\Models\Wish;
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
      return view ('plugins.reflection');
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
