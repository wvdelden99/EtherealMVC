<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presets extends Model
{
    protected $fillable = ['fav', 'user_id', 'preset_title', 'creator', 'category'];

    // use HasFactory;
    public function scopeSearch($query, $s)
    {
      return $query->where('preset_title', 'like', '%' .$s. '%')
          ->orWhere('creator', 'like', '%' .$s. '%');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
