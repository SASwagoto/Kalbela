<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'index'])->name('homepage');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Category Controller
    Route::prefix('category')->group(function(){
        Route::get('/create', [CategoryController::class, 'index'])->name('category.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/edit/{slug}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/update/{slug}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('/delete', [CategoryController::class, 'delete'])->name('category.delete');
    });

    //Tag Controller
    Route::prefix('tag')->group(function(){
        Route::get('/create', [TagController::class, 'index'])->name('tag.create');
        Route::post('/store', [TagController::class, 'store'])->name('tag.store');
        Route::get('/edit/{slug}', [TagController::class, 'edit'])->name('tag.edit');
        Route::put('/update/{slug}', [TagController::class, 'update'])->name('tag.update');
        Route::delete('/delete', [TagController::class, 'delete'])->name('tag.delete');
    });

    //Post Controller
    Route::prefix('posts')->group(function(){
        Route::get('/', [PostController::class, 'index'])->name('post.all');
    });
});

require __DIR__.'/auth.php';
