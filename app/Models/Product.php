<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'products';

  protected $fillable = [
    'name',
    'description',
    'stock',
    'price',
    'status',
    'skup',
    'porcentage_discount',
    'views'
  ];
}
