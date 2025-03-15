<?php

namespace App\Providers;

use App\Repositoy\Eloquent\Auth\AuthRepository;
use App\Repositoy\Eloquent\Product\BrandRepository;
use App\Repositoy\Eloquent\Product\CategoryRepository;
use App\Repositoy\Eloquent\Product\ProductRepository;
use App\Repositoy\Eloquent\Shopping\ShoppingRepository;
use App\Repositoy\Eloquent\Users\ClientRepository;
use App\Repositoy\Repository\Auth\AuthRepositoryInterface;
use App\Repositoy\Repository\Product\BrandRepositoryInterface;
use App\Repositoy\Repository\Product\CategoryRepositoryInterface;
use App\Repositoy\Repository\Product\ProductRepositoryInterface;
use App\Repositoy\Repository\Shopping\ShoppingRepositoryInterface;
use App\Repositoy\Repository\Users\ClientRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function register(): void
  {
    $this->app->bind(AuthRepositoryInterface::class, AuthRepository::class);
    $this->app->bind(ClientRepositoryInterface::class, ClientRepository::class);
    $this->app->bind(BrandRepositoryInterface::class, BrandRepository::class);
    $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
    $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
    $this->app->bind(ShoppingRepositoryInterface::class, ShoppingRepository::class);
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(): void
  {
    //
  }
}
