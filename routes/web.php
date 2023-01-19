<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// userAuth
Route::get('/', function () {
    return view('auth.auth');
})->name('auth.auth');
Route::post('user/auth',[UserController::class,'userAuth'])->name('userAuth');

// createUser
Route::get('user/table',[UserController::class,'userTable'])->name('userTable');
Route::get('user/create',[UserController::class,'userCreate'])->name('userCreate');
Route::post('create/info',[UserController::class,'createInfo'])->name('createInfo');

// userDelete
Route::get('user/delete/{id}',[UserController::class,'userDelete'])->name('userDelete');

// category
Route::get('category',[CategoryController::class,'category'])->name('category');
Route::get('category/create',[CategoryController::class,'categoryCreate'])->name('categoryCreate');
Route::get('createCategory/info',[CategoryController::class,'createCategoryInfo'])->name('createCategoryInfo');



