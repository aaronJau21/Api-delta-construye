<?php

namespace App\Repositoy\Repository\Product;

use App\Models\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface ProductRepositoryInterface
{
  public function getAllProducts(): LengthAwarePaginator;
  public function getProductBySku(string $sku): Product;
  public function getAllProductsNoPrice(): LengthAwarePaginator;
}
