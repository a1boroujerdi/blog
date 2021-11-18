<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

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

Route::get('/',[SiteController::class,'index']);
Route::get('logout',[LoginController::class,'logout']);
Route::resource('post',PostController::class);
Route::resource('user',UserController::class);

Route::middleware(['auth', 'isAdmin'])->group(function() {
Route::get('admin',[AdminController::class,'index'])->name('admin');
Route::resource('category', CategoryController::class);

});
