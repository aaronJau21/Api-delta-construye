<?php

namespace App\Http\Controllers\Product;

use App\Exceptions\UnAuthorizedException;
use App\Http\Controllers\Controller;
use App\Repositoy\Repository\Product\CategoryRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

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

  public function getCategoriesSistem()
  {
    $user = Auth::user();
    if ($user->role == 'admin') {
      $categories = $this->_repositoy->getCategoriesSistem();
      return response()->json($categories);
    } else {
      throw new UnAuthorizedException();
    }
  }
}
