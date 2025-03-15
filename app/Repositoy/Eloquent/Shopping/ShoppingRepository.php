<?php

namespace App\Repositoy\Eloquent\Shopping;

use App\Models\Shopping;
use App\Repositoy\Repository\Shopping\ShoppingRepositoryInterface;

class ShoppingRepository implements ShoppingRepositoryInterface
{
  /**
   * Create a new class instance.
   */
  protected $_model;
  public function __construct(Shopping $shopping)
  {
    $this->_model = $shopping;
  }

  public function create(array $data): Shopping
  {
    return $this->_model->create($data);
  }
}
