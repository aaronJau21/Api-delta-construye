<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginUserRequest;
use App\Repositoy\Repository\Auth\AuthRepositoryInterface;

class AuthController extends Controller
{
  protected $_repository;
  public function __construct(AuthRepositoryInterface $repository)
  {
    $this->_repository = $repository;
  }

  public function loginUser(LoginUserRequest $request)
  {
    $data = $request->validated();
    $result = $this->_repository->loginUser($data);

    return $result;
  }

  public function loginClient(LoginUserRequest $request)
  {
    $data = $request->validated();
    $result = $this->_repository->loginClient($data);

    return $result;
  }
}
