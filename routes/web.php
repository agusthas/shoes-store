<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\BrandController as AdminBrandController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\ShoeController as AdminShoeController;
use App\Http\Controllers\Admin\SizeController as AdminSizeController;
use App\Http\Controllers\Admin\StyleController as AdminStyleController;
use App\Http\Controllers\Admin\TransactionController as AdminTransactionController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShoeController;
use App\Http\Controllers\TransactionController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.store');

Route::get('/shoes', [ShoeController::class, 'index'])->name('shoes');
Route::get('/shoes/{shoe}', [ShoeController::class, 'show'])->name('shoes.show');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::post('/cart', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    Route::patch('/cart/{stock}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/{stock}', [CartController::class, 'destroy'])->name('cart.delete');

    Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions');
});

Route::group(['middleware' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    Route::resource('dashboard/brands', AdminBrandController::class);
    Route::resource('dashboard/categories', AdminCategoryController::class);
    Route::resource('dashboard/styles', AdminStyleController::class);
    Route::get('dashboard/sizes', [AdminSizeController::class, 'index'])->name('sizes.index');
    Route::get('dashboard/sizes/{size}', [AdminSizeController::class, 'show'])->name('sizes.show');
    Route::resource('dashboard/shoes', AdminShoeController::class);
    Route::resource('dashboard/transactions', AdminTransactionController::class)->only(['index', 'show', 'destroy']);
    Route::resource('dashboard/users', AdminUserController::class)->except(['create', 'store']);
});
