<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\CreateClientRequest;
use App\Repositoy\Repository\Users\ClientRepositoryInterface;
use Illuminate\Http\Request;

class ClientController extends Controller
{
  protected $_repository;
  public function __construct(ClientRepositoryInterface $repository)
  {
    $this->_repository = $repository;
  }

  public function create(CreateClientRequest $request)
  {
    $data = $request->validated();
    return $this->_repository->create($data);
  }
}
