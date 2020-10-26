<?php

namespace App\Http\Controllers;

use App\Models\Presets;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index(Request $request)
    {
      $s = $request->input('s');

      $presets = Presets::take(5)->latest()
        ->search($s)
        ->get();

      if($request['sort'] == "new"){
          $presets = Presets::take(5)->orderBy('created_at', 'desc')->get();
      }
      elseif($request['sort'] == "atoz"){
          $presets = Presets::take(5)->orderBy('preset_title')->get();
      }
      elseif($request['sort'] == "ztoa"){
        $presets = Presets::take(5)->orderBy('preset_title', 'desc')->get();
    }

      return view('community', ['presets' => $presets]);
    }

    public function create()
    {
      return view('presets.create');
    }

    public function store()
    {
      $preset = new Presets();

      $preset->preset_title = request('preset_title');
      $preset->creator = request('creator');
      $preset->category = request('category');

      $preset->save();

      return redirect('/community');
    }
}
