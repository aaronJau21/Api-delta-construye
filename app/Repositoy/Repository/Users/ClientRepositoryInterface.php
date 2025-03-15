<?php

namespace App\Repositoy\Repository\Users;

use App\Models\Client;

interface ClientRepositoryInterface
{
  public function create(array $data):Client;
  public function getClient(string $name):Client;
  public function updateClient(string $name,array $data) :Client;
}
