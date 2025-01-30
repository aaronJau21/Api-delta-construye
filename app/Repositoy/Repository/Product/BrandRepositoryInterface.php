<?php

namespace App\Repositoy\Repository\Product;

use App\Models\Brand;

interface BrandRepositoryInterface
{
  public function createBrand(array $data): Brand;
}
