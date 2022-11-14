<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;



Route::prefix('auth')->group(function(){

    Route::post('/register', [AuthController::class, 'createUser'])->name('register');
    Route::post('/login', [AuthController::class, 'loginUser'])->name('login');

    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });    
    
});

