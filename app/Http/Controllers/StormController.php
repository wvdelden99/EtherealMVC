<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StormController extends Controller
{
    public function show()
    {
      return view ('storm');  
    }
}
