<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Product\BrandController;
use App\Http\Controllers\Product\CategoryController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Shopping\ShoppingController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
  Route::post('loginUser', [AuthController::class, 'loginUser']);
  Route::post('loginClient', [AuthController::class, 'loginClient']);
});

Route::prefix('client')->group(function () {
  Route::post('create', [ClientController::class, 'create']);
  Route::get('getClient/{name}', [ClientController::class, 'getClient']);
  Route::patch('update/{name}', [ClientController::class, 'updateClient']);
  Route::prefix('shopping')->group(function () {
    Route::post('create', [ShoppingController::class, 'create']);
    Route::get('getShopping/{clientId}', [ClientController::class, 'getShopping']);
  });
});

Route::prefix('brands')->group(function () {
  Route::middleware('jwt')->group(function () {
    Route::post('create', [BrandController::class, 'createBrand']);
    Route::get('', [BrandController::class, 'getBrandsForPage']);
  });
  Route::get('public', [BrandController::class, 'getProducts']);
  Route::get('category/{id}', [BrandController::class, 'getBrandForCategory']);
});

Route::prefix('category')->group(function () {
  Route::get('', [CategoryController::class, 'getCategories']);
});
Route::prefix('product')->group(function () {
  Route::get('', [ProductController::class, 'getAllProducts']);
  Route::get('/{sku}', [ProductController::class, 'getProductBySku']);
  Route::get('/get/no-price', [ProductController::class, 'getAllProductsNoPrice']);
});

// Sistema
Route::prefix('sistema')->middleware('jwt')->group(function () {

  // Category
  Route::prefix('cateogory')->group(function () {
    Route::get('', [CategoryController::class, 'getCategoriesSistem']);
  });

  // Products 
  Route::prefix('products')->group(function () {});
});
