<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
  protected $table = 'brands';
  protected $primaryKey = 'key';
  public $incrementing = false;
  protected $keyType = 'string';
  protected $fillable = ['key', 'name', 'logo', 'status'];
}
