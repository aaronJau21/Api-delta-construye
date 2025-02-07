<?php

namespace App\Repositoy\Repository\Product;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface ProductRepositoryInterface
{
  public function getAllProducts(): LengthAwarePaginator;
}
