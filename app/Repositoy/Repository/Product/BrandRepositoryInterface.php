<?php

namespace App\Repositoy\Repository\Product;

use App\Models\Brand;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface BrandRepositoryInterface
{
  public function createBrand(array $data): Brand;
  public function getBrands(): Collection;
  public function getBrandById(int $id): Brand | null;
  public function getBrandsForPage(): LengthAwarePaginator;
  public function getBrandForCategory(string $id);
}
