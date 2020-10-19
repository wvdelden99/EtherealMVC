<?php

namespace App\Http\Controllers;

use App\Models\Presets;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function show()
    {
      return view ('community');  
    }

    // public function show($id)
    // {
    //   $presets = Presets::find($id);

    //   return view('presets.show', ['presets' => $presets]);
    // }

    public function create()
    {
      return view('presets.create');
    }
}
