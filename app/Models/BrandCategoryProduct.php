<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrandCategoryProduct extends Model
{
  protected $table = 'brand_category_products';
  protected $fillable = ['brand_id', 'category_id', 'product_id'];
}
