<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\Banner;
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
//route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/', function () {
    $banners = Banner::all();
    $products = \App\Models\Product::query()->latest('id')->get();
    return view('client.index', compact('products','banners'));
});
Route::prefix('client')->as('client.')->group(function () {

    Route::get('{id}/show', [HomeController::class, 'show'])->name('show');
});

Route::get('/client/index', [HomeController::class, 'index'])->name('client.index');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'postLogin']);
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'postRegister']);
Route::get('/logout', [UserController::class, 'logout'])->name('logout');




Route::get('test-mail', [HomeController::class, 'testEmail']);


Route::group(['prefix' => 'cart'], function () {
    route::get('/', [CartController::class, 'view'])->name('cart.view');
    route::get('/add{product}', [CartController::class, 'addToCart'])->name('cart.add');
    route::get('/delete{id}', [CartController::class, 'DeleteCart'])->name('cart.delete');
    route::get('/update{id}', [CartController::class, 'UpdateCart'])->name('cart.update');
    route::get('/clear', [CartController::class, 'ClearCart'])->name('cart.clear');
});
