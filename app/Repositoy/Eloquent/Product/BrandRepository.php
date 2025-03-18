<?php

namespace App\Repositoy\Eloquent\Product;

use App\Models\Brand;
use App\Models\BrandCategory;
use App\Repositoy\Repository\Product\BrandRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class BrandRepository implements BrandRepositoryInterface
{
  protected $_model;
  protected $_modelBrandCategory;
  public function __construct(Brand $model, BrandCategory $modelBrandCategory)
  {
    $this->_model = $model;
    $this->_modelBrandCategory = $modelBrandCategory;
  }

  public function createBrand(array $data): Brand
  {
    return $this->_model->create($data);
  }

  public function getBrands(): Collection
  {
    // return $this->_model->paginate(10);
    // return $this->_model->select(['id', 'name'])->with('categories:id,name')->get();
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

  public function getBrandForCategory(string $id)
  {
    if ($id == '0') {
      return $this->_modelBrandCategory->with(['brand', 'category'])->get();
    }

    return $this->_modelBrandCategory->with(['brand', 'category'])->where('category_id', $id)->get();
  }
}
