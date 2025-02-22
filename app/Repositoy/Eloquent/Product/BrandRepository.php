<?php

namespace App\Repositoy\Eloquent\Product;

use App\Models\Brand;
use App\Repositoy\Repository\Product\BrandRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

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

  public function getBrands(): Collection
  {
    // return $this->_model->paginate(10);
    return $this->_model->all();
  }

  public function getBrandById(int $id): Brand | null
  {
    $brand = $this->_model->find($id);

    return $brand;
  }

  public function getBrandsForPage(): LengthAwarePaginator
  {
    return $this->_model->orderBy('id', 'ASC')->paginate(15);
  }
}
