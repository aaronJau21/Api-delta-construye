<?php

namespace App\Repositoy\Repository\Users;

interface ClientRepositoryInterface
{
  public function create(array $data);
  public function getClient($name);
}
