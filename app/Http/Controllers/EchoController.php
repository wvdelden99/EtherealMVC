<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EchoController extends Controller
{
    public function show()
    {
      return view ('echo');  
    }
}
