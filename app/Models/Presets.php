<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presets extends Model
{
    // use HasFactory;
    public function scopeSearch($query, $s)
    {
      return $query->where('preset_title', 'like', '%' .$s. '%')
          ->orWhere('creator', 'like', '%' .$s. '%');
    }
}
