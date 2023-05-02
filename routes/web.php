<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EndUser\BlogController;
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
//enduser route start
Route::get('/', [BlogController::class, 'index'])->name('blog.index');
Route::get('/post/{id}', [BlogController::class, 'single'])->name('blog.single');


//auth routes
Route::get('/login', [AuthController::class, 'index'])->name('loginPage');
Route::post('/login', [AuthController::class, 'login'])->name('login');


//admin & writer routes
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    //category routes (only admin)
    Route::group(['prefix' => 'categories', 'as' => 'category.'], function () {
        Route::get('/add', [CategoryController::class, 'add'])->name('add');
        Route::Post('/store', [CategoryController::class, 'store'])->name('store');
        Route::delete('/delete', [CategoryController::class, 'delete'])->name('delete');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::put('/update', [CategoryController::class, 'update'])->name('update');
    });

    //post routes
    Route::group(['prefix' => 'posts', 'as' => 'post.'], function () {
        Route::get('/', [PostController::class, 'index'])->name('posts');
        Route::get('/add', [PostController::class, 'add'])->name('add');
        Route::post('/store', [PostController::class, 'store'])->name('store');
        Route::delete('/delete', [PostController::class, 'delete'])->name('delete');
        Route::get('/edit/{id}', [PostController::class, 'edit'])->name('edit');
        Route::put('/update', [PostController::class, 'update'])->name('update');
    });
    Route::group(['prefix' => 'users', 'as' => 'user.'], function () {
        Route::get('/', [UserController::class, 'index'])->name('users');
        Route::get('/add', [UserController::class, 'add'])->name('add');
        Route::post('/add', [UserController::class, 'store'])->name('store');
    });
});
