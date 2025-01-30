<?php

namespace App\Repositoy\Eloquent\Product;

use App\Models\Brand;
use App\Repositoy\Repository\Product\BrandRepositoryInterface;

class BrandRepository implements BrandRepositoryInterface
{
  protected $_model;
  public function __construct(Brand $model)
  {
    $this->_model = $model;
  }

  public function createBrand(array $data): Brand
  {
    return $this->_model->create($data);
  }
}
