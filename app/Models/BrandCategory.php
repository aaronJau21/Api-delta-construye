<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrandCategory extends Model
{
  protected $table = 'brand_categories';
  protected $fillable = [
    'brand_id',
    'category_id',
  ];

  public function brand()
  {
    return $this->belongsTo(Brand::class, 'brand_id');
  }

  public function category()
  {
    return $this->belongsTo(Category::class, 'category_id');
  }
}
