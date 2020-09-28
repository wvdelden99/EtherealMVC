<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkyController extends Controller
{
    public function show()
    {
      return view ('sky');  
    }
}
