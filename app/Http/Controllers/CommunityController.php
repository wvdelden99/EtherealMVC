<?php

namespace App\Http\Controllers;

use App\Models\Presets;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index(Request $request)
    {
      $s = $request->input('s');

      $category = Category::take('name');

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
      elseif($request['sort'] == "category"){
        $presets = Presets::take(5)->orderBy('category')->get();
    }

      return view('community', ['presets' => $presets], ['categories' => Category::all()]);
    }

    public function create()
    {
      return view('presets.upload-preset', [
        'categories' => Category::all()
      ]);
    }

    public function store()
    {
      Presets::create(request()->validate([
        'user_id' =>  'required',
        'preset_title' => ['required', 'min:2', 'max:100'],
        'creator' => 'required',
        'category' => 'required'
      ]));

      return redirect('/community');
    }
}
