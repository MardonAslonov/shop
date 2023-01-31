<?php

use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\ProductApiController;
use App\Http\Controllers\Api\UserApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users',[UserApiController::class,'index']);
Route::get('users/{id}',[UserApiController::class,'show']);

Route::get('products',[ProductApiController::class,'index']);
Route::post('product/create',[ProductApiController::class,'store']);
Route::post('product/{id}',[ProductApiController::class,'update']);
Route::get('product/{id}',[ProductApiController::class,'show']);
Route::get('product/delete/{id}',[ProductApiController::class,'destroy']);

Route::get('category',[CategoryApiController::class,'index']);
Route::post('category/create',[CategoryApiController::class,'store']);
Route::post('category/{id}',[CategoryApiController::class,'update']);
Route::get('category/{id}',[CategoryApiController::class,'show']);
Route::get('category/delete/{id}',[CategoryApiController::class,'destroy']);
