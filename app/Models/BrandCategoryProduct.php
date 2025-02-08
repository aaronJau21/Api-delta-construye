<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BrandCategoryProduct extends Model
{
  protected $table = 'brand_category_products';
  protected $fillable = ['brand_id', 'category_id', 'product_id'];

  public function brand(): BelongsTo
  {
    return $this->belongsTo(Brand::class);
  }

  public function category(): BelongsTo
  {
    return $this->belongsTo(Category::class);
  }

  public function product(): BelongsTo
  {
    return $this->belongsTo(Product::class);
  }
}
