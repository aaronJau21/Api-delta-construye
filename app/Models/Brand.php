<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Brand extends Model
{
  protected $table = 'brands';
  protected $fillable = ['name', 'logo', 'status', 'category_id'];

  public function categories(): BelongsToMany
  {
    return $this->belongsToMany(Category::class, 'brand_categories', 'brand_id', 'category_id');
  }
}
