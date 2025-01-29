<?php

namespace App\Providers;

use App\Repositoy\Eloquent\Auth\AuthRepository;
use App\Repositoy\Eloquent\Users\ClientRepository;
use App\Repositoy\Repository\Auth\AuthRepositoryInterface;
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
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(): void
  {
    //
  }
}
