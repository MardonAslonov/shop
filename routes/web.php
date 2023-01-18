<?php

use App\Http\Controllers\ShopController;
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
Route::post('/userAuth',[ShopController::class,'userAuth'])->name('userAuth');

// createUser
Route::get('/userTable',[ShopController::class,'userTable'])->name('userTable');
Route::get('/userCreate',[ShopController::class,'userCreate'])->name('userCreate');
Route::post('/createInfo',[ShopController::class,'createInfo'])->name('createInfo');

// userDelete
Route::get('/userDelete/{id}',[ShopController::class,'userDelete'])->name('userDelete');

// category
Route::get('category',[ShopController::class,'category'])->name('category');
Route::get('categoryCreate',[ShopController::class,'categoryCreate'])->name('categoryCreate');
Route::get('createCategoryInfo',[ShopController::class,'createCategoryInfo'])->name('createCategoryInfo');



