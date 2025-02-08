<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Product extends Model
{
  protected $table = 'products';

  protected $fillable = [
    'name',
    'description',
    'stock',
    'price',
    'status',
    'sku',
    'porcentage_discount',
    'views'
  ];

  protected $hidden = [
    "created_at",
    "updated_at",
    "views"
  ];

  public function brandCategoryProducts(): HasMany
  {
    return $this->hasMany(BrandCategoryProduct::class);
  }

  public function brands(): HasManyThrough
  {
    return $this->hasManyThrough(Brand::class, BrandCategoryProduct::class, 'product_id', 'id', 'id', 'brand_id');
  }

  public function categories(): HasManyThrough
  {
    return $this->hasManyThrough(Category::class, BrandCategoryProduct::class, 'product_id', 'id', 'id', 'category_id');
  }
}
