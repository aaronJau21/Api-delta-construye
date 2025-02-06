<?php

namespace App\Repositoy\Eloquent\Product;

use App\Models\Category;
use App\Repositoy\Repository\Product\CategoryRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository implements CategoryRepositoryInterface
{
  protected $_model;
  public function __construct(Category $model)
  {
    $this->_model = $model;
  }

  public function getCategories(): Collection
  {
    return $this->_model->withCount('brands')->get();
  }
}
