<?php

namespace App\Http\Controllers\Shopping;

use App\Exceptions\InternalServerErrorException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Shopping\ShoppingCreateRequest;
use App\Repositoy\Repository\Shopping\ShoppingRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{

  protected $_repository;
  public function __construct(ShoppingRepositoryInterface $repository)
  {
    $this->_repository = $repository;
  }

  public function create(ShoppingCreateRequest $query): JsonResponse
  {
    $data = $query->validated();
    try {
      $shopping = $this->_repository->create($data);

      return response()->json([
        'data' => $shopping
      ], 201);
    } catch (\Exception $e) {
      throw new InternalServerErrorException($e->getMessage());
    }
  }
}
