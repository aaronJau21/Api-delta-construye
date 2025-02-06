<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Repositoy\Repository\Product\CategoryRepositoryInterface;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
  protected $_repositoy;
  public function __construct(CategoryRepositoryInterface $repositoy)
  {
    $this->_repositoy = $repositoy;
  }

  public function getCategories(): JsonResponse
  {
    $categories = $this->_repositoy->getCategories();
    return response()->json($categories);
  }
}
