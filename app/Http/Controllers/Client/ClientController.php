<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\CreateClientRequest;
use App\Http\Requests\Client\UpdateUserRequest;
use App\Repositoy\Repository\Users\ClientRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ClientController extends Controller
{
  protected $_repository;
  public function __construct(ClientRepositoryInterface $repository)
  {
    $this->_repository = $repository;
  }

  public function create(CreateClientRequest $request): JsonResponse
  {
    $data = $request->validated();
    return response()->json($this->_repository->create($data));
  }

  public function getClient($name)
  {
    $data = $this->_repository->getClient($name);
    return response()->json($data);
  }

  public function updateClient(string $name, UpdateUserRequest $request): JsonResponse
  {
    $data = $request->validated();
    return response()->json($this->_repository->updateClient($name, $data));
  }
}
