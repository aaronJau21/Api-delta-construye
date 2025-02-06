<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
  protected $table = 'categories';
  protected $fillable = [
    'name',
  ];

  public function brands(): BelongsToMany
  {
    return $this->belongsToMany(Brand::class, 'brand_categories', 'category_id', 'brand_id');
  }
}
