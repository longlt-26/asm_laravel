<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $products = \App\Models\Product::query()->latest('id')->get();
    return view('client.index', compact('products'));
});
Route::prefix('client')
    ->as('client.')
    ->group(function () {
         Route::get('{id}/show', [HomeController::class, 'show'])->name('show');

    });









