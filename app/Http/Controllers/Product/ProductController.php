<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Repositoy\Repository\Product\ProductRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $_repository;
    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->_repository = $repository;
    }

    public function getAllProducts(): JsonResponse
    {
        $products = $this->_repository->getAllProducts();
        return response()->json($products);
    }

    public function getProductBySku(string $sku): JsonResponse
    {
        $product = $this->_repository->getProductBySku($sku);
        return response()->json($product);
    }

    public function getAllProductsNoPrice(): JsonResponse
    {
        $products = $this->_repository->getAllProductsNoPrice();
        return response()->json($products);
    }

    // Nuevo
    public function getProductByName(string $name): JsonResponse
    {
        $product = $this->_repository->getProductByName($name);

        return response()->json($product);
    }
}
