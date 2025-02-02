<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
  protected $table = 'brands';
  protected $fillable = ['name', 'logo', 'status', 'category_id'];
}
