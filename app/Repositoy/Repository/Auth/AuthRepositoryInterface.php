<?php

namespace App\Repositoy\Repository\Auth;

interface AuthRepositoryInterface
{
  public function loginUser(array $data);
  public function loginClient(array $data);
}
