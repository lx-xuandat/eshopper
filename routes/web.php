<?php

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
Route::get('/', function () {
    return view('eshopper.home');
})->name('home');

/**
 * Adminitrator
 */
Route::prefix('dashboard')->group(function () {
    Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
        return view('adminlte.dashboard');
    })->name('admin');
});
