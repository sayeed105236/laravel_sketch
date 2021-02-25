<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Brand extends Model
{
  use HasFactory;
  public function parent()
  {
    return $this->belongsTo(Category::class,'parent_id');
  }

  public function products()
  {
    return $this->hasMany(Category::class);
  }
}
