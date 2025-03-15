<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
  protected $table = 'shoppings';
  protected $fillable = [
    'id_product',
    'id_client'
  ];
}
