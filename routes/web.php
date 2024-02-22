<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdvertiseController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SiteSettingsController;
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
Route::get('/news/leatest', [HomeController::class, 'allNews'])->name('allNews');
Route::get('/news/{slug}', [HomeController::class, 'newsBy'])->name('newsBy');
Route::get('/news/{category}/{slug}', [HomeController::class, 'singleNews'])->name('singleNews');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('dashboard')->middleware('auth')->group(function () {
    route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Category Controller
    Route::prefix('category')->group(function(){
        Route::get('/', [CategoryController::class, 'index'])->name('category.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/edit/{slug}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/update/{slug}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('/delete', [CategoryController::class, 'delete'])->name('category.delete');
    });

    //Tag Controller
    Route::prefix('tag')->group(function(){
        Route::get('/', [TagController::class, 'index'])->name('tag.create');
        Route::post('/store', [TagController::class, 'store'])->name('tag.store');
        Route::get('/edit/{slug}', [TagController::class, 'edit'])->name('tag.edit');
        Route::put('/update/{slug}', [TagController::class, 'update'])->name('tag.update');
        Route::delete('/delete', [TagController::class, 'delete'])->name('tag.delete');
    });

    //Post Controller
    Route::prefix('posts')->group(function(){
        Route::get('/', [PostController::class, 'index'])->name('post.all');
        Route::get('/create', [PostController::class, 'create'])->name('post.create');
        Route::post('/ckedior_upload', [PostController::class, 'upload'])->name('ckeditor.upload');
        Route::post('/store', [PostController::class, 'store'])->name('post.store');
        Route::get('/view/{slug}', [PostController::class, 'show'])->name('post.show');
        Route::get('/edit/{slug}', [PostController::class, 'edit'])->name('post.edit');
        Route::put('/update/{slug}', [PostController::class, 'update'])->name('post.update');
        Route::delete('/delete/{slug}', [PostController::class, 'delete'])->name('post.delete');

        Route::get('/get_districts/{id}', [PostController::class, 'get_districts'])->name('getDistricts');
        Route::get('/get_upazila/{id}', [PostController::class, 'get_upazila'])->name('getUpazila');
    });

    Route::prefix('primary-menu')->group(function(){
        Route::get('/', [MenuController::class,'index'])->name('menu.index');
        Route::put('/update/{slug}', [MenuController::class,'update'])->name('menu.update');
    });

    Route::prefix('settings')->group(function(){
        Route::get('/', [SiteSettingsController::class, 'index'])->name('settings.index');
        Route::put('/update', [SiteSettingsController::class, 'update'])->name('settings.update');
    });

    Route::prefix('Advertise')->group(function(){
        Route::get('/', [AdvertiseController::class, 'index'])->name('ad.index');
        Route::get('/create', [AdvertiseController::class, 'create'])->name('ad.create');
        Route::post('/store', [AdvertiseController::class, 'store'])->name('ad.store');
    });
});

require __DIR__.'/auth.php';
