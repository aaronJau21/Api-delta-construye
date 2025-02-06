<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\BrandCreateRequest;
use App\Repositoy\Repository\Product\BrandRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BrandController extends Controller
{
  protected $_repository;
  public function __construct(BrandRepositoryInterface $repository)
  {
    $this->_repository = $repository;
  }

  public function createBrand(BrandCreateRequest $query): JsonResponse
  {
    $data = $query->validated();
    $brand = $this->_repository->createBrand($data);

    return response()->json([
      'data' => $brand
    ]);
  }

  public function getProducts(): JsonResponse
  {
    $brands = $this->_repository->getBrands();

    return response()->json([
      'data' => $brands
    ]);
  }
}
