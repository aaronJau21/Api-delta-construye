<?php

namespace App\Repositoy\Repository\Product;

use Illuminate\Database\Eloquent\Collection;

interface CategoryRepositoryInterface
{
  public function getCategories(): Collection;
}
