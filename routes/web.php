<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/', function () {
    return view('dashbaord');
})->name('/');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::group(['prefix'=>'admin'], function(){
    Route::get('login', [AdminLoginController::class, 'loginpage'])->name('admin.login.page');
    Route::get('register', [AdminLoginController::class, 'registerpage'])->name('admin.register.page');
    Route::post('login', [AdminLoginController::class, 'login'])->name('admin.login');
    Route::post('register', [AdminLoginController::class, 'register'])->name('admin.register');
    Route::get('dashboard', [AdminLoginController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('list', [AdminController::class, 'index'])->name('admin.list');
    Route::get('create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('store', [AdminController::class, 'store'])->name('admin.store');
});

Route::group(['prefix'=>'product'], function(){
    Route::get('create', [ProductController::class, 'create'])->name('product.create');
    Route::get('brand', [ProductController::class, 'brand'])->name('product.brand');
    Route::post('store', [ProductController::class, 'store'])->name('product.store');
    Route::get('show', [ProductController::class, 'show'])->name('product.show');
});



