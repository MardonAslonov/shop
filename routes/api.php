<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\ProductApiController;
use App\Http\Controllers\Api\UserApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {

Route::post('logout', [AuthController::class, 'logout']);

Route::get('users',[UserApiController::class,'index']);
Route::post('user/create',[UserApiController::class,'store']);
Route::post('user/{id}',[UserApiController::class,'update']);
Route::get('user/{id}',[UserApiController::class,'show']);
Route::get('user/delete/{id}',[UserApiController::class,'destroy']);

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

});
