<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Product\BrandController;
use App\Http\Controllers\Product\CategoryController;
use App\Http\Controllers\Product\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
  Route::post('loginUser', [AuthController::class, 'loginUser']);
  Route::post('loginClient', [AuthController::class, 'loginClient']);
});

Route::prefix('client')->group(function () {
  Route::post('create', [ClientController::class, 'create']);
});

Route::prefix('brands')->group(function () {
  Route::middleware('jwt')->group(function () {
    Route::post('create', [BrandController::class, 'createBrand']);
  });
  Route::get('', [BrandController::class, 'getProducts']);
});

Route::prefix('category')->group(function () {
  Route::get('', [CategoryController::class, 'getCategories']);
});
Route::prefix('product')->group(function () {
  Route::get('', [ProductController::class, 'getAllProducts']);
  Route::get('/{sku}', [ProductController::class, 'getProductBySku']);
});
