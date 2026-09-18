<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ClientController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login'])
    ->name('api.login');

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/me', [AuthController::class, 'me'])
        ->name('api.me');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('api.logout');

    Route::apiResource('products', ProductController::class)
        ->names('api.products');

    Route::apiResource('clients', ClientController::class)
        ->names('api.clients');

});

Route::middleware(['auth:sanctum', 'admin'])->group(function () {

    Route::apiResource('users', UserController::class)
        ->names('api.users');
});