<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
  protected $table = 'variants';
  protected $fillable = ['name', 'product_id'];
}
