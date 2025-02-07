<?php

namespace App\Repositoy\Eloquent\Product;

use App\Models\Product;
use App\Repositoy\Repository\Product\ProductRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository implements ProductRepositoryInterface
{
  protected $_model;
  public function __construct(Product $model)
  {
    $this->_model = $model;
  }

  public function getAllProducts(): LengthAwarePaginator
  {
    return $this->_model->paginate(10);
  }
}
