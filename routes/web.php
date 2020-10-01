<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShoppingListController;
use App\Http\Controllers\WishListController;
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

Route::resource('/', HomeController::class);

Route::resource('/shoppinglist', ShoppingListController::class);
Route::resource('/wishlist', WishListController::class);
// Route::resource('/brukere', UserController::class);
