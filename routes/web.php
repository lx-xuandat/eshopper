<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
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

/**
 * eshoper
 */

// Home
Route::get('/', [ProductController::class, 'home'])->name('home');

// Shop
Route::get('shop', [ProductController::class, 'index'])->name('shop');
Route::get('product-details/{id}', [ProductController::class, 'show'])->name('product-details');
Route::get('checkout', [ProductController::class, 'checkout'])->name('checkout');
Route::get('cart', [ProductController::class, 'cart'])->name('cart');

// User
//Route::get('login', [UserController::class, 'login'])->name('login');

// Blog
Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{id}', [BlogController::class, 'show'])->name('blog-detail');
Route::get('contact', [BlogController::class, 'contactUs'])->name('contact');

/**
 * Adminitrator
 */
Route::prefix('dashboard')->group(function () {
    Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
        return view('adminlte.dashboard');
    })->name('admin');
});
