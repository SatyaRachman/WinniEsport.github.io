<?php

use App\Http\Controllers\Back\ConfigController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Back\articleController;
use App\Http\Controllers\Back\CategoryController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Front\ArticleController as FrontArticleController;
use App\Http\Controllers\Front\CategoryController as FrontCategoryController;

// Route::get('/', function () {
//    return view('welcome');
// });

Route::get('/',[HomeController::class, 'index']);
Route::get('/about',[HomeController::class, 'about']);
Route::get('/contact',[ContactController::class, 'index']);

Route::get('/p/{slug}',[FrontArticleController::class, 'show']);
Route::get('/articles',[FrontArticleController::class, 'index']);
Route::post('/articles/search',[FrontArticleController::class, 'index'])->name('search');

route::get('category/{slug}', [FrontCategoryController::class, 'index']);
route::get('all-category', [FrontCategoryController::class, 'allCategory']);

Route::middleware('auth')->group(function() {
    Route::get('dashboard', [DashboardController::class, 'index']);

    Route::resource('article', articleController::class);

    Route::resource('/categories', CategoryController::class)->only([
        'index', 'store', 'update', 'destroy'
    ])->middleware('UserAccess:1');

    Route::resource('/users', UserController::class);

    Route::resource('/config', ConfigController::class)->only([
        'index', 'update'
    ]);


    Route::group(['prefix' => 'laravel-filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
