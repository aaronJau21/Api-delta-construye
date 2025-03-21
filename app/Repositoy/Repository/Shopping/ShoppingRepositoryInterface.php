<?php

namespace App\Repositoy\Repository\Shopping;

use App\Models\Shopping;

interface ShoppingRepositoryInterface
{
  public function create(array $data): Shopping;
  public function getShoppingByClient(string $name): Shopping;
}
