<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\TagController as AdminTagController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\SearchController;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/article/{slug}', [PostController::class, 'show'])->name('posts.single');

Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('categories.single');

Route::get('/tag/{slug}', [TagController::class, 'show'])->name('tags.single');

Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::middleware('guest')->group(function () {
    Route::get('/register', [AdminUserController::class, 'create'])->name('register.create');
    Route::post('/register', [AdminUserController::class, 'store'])->name('register.store');
    Route::get('/login', [AdminUserController::class, 'loginForm'])->name('login.create');
    Route::post('/login', [AdminUserController::class, 'login'])->name('login');
});

Route::get('/logout', [AdminUserController::class, 'logout'])->name('logout');

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('admin.index');
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('tags', AdminTagController::class);
    Route::resource('posts', AdminPostController::class);
});