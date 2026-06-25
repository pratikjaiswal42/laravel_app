<?php

use App\Http\Controllers\PostApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/check', [PostApiController::class, 'index'])->middleware('auth:sanctum');
