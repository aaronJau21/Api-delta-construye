<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Client\ClientController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
  Route::post('loginUser', [AuthController::class, 'loginUser']);
  Route::post('loginClient', [AuthController::class, 'loginClient']);
});

Route::prefix('client')->group(function () {
  Route::post('create', [ClientController::class, 'create']);
});
