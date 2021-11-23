<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::post('/login', [LoginController::class, 'login'])
        ->middleware('guest');
    Route::post('/logout', [LogoutController::class, 'logout'])
        ->middleware('auth');
});
