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

Route::middleware(['auth:sanctum', 'verified', 'isAdmin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/backend/products', 'App\Http\Controllers\ProductController@adminIndex')
        ->name('admin.products');

    Route::get('/backend/product/create', 'App\Http\Controllers\ProductController@create')
        ->name('admin.product.create');

    Route::get('/backend/product/{id}', 'App\Http\Controllers\ProductController@adminView')
        ->name('admin.product');

    Route::post('/backend/product', 'App\Http\Controllers\ProductController@store')
        ->name('admin.product.store');

    Route::get('/backend/product/{id}/edit', 'App\Http\Controllers\ProductController@edit')
        ->name('admin.product.edit');

    Route::patch('/backend/product/{id}', 'App\Http\Controllers\ProductController@update')
        ->name('admin.product.update');

    Route::delete('/backend/product/{id}', 'App\Http\Controllers\ProductController@destroy')
        ->name('admin.product.destroy');
});

Route::middleware(['isUser'])->group(function () {
    Route::get('/', 'App\Http\Controllers\Controller@index');

    Route::get('/search', 'App\Http\Controllers\ProductController@search')
        ->name('search');

    Route::get('/contact', 'App\Http\Controllers\Controller@contactUs');

    Route::get('/about', 'App\Http\Controllers\Controller@aboutUs');

    Route::middleware(['noAuth'])->group(function () {
        Route::get('/signup', 'App\Http\Controllers\AuthController@viewSignUp')
            ->name('sign-up');

        Route::get('/signin', 'App\Http\Controllers\AuthController@viewSignIn')
            ->name('sign-in');
    });

    Route::get('/bag', 'App\Http\Controllers\BagController@index')
        ->name('bag');

    Route::get('/reset', 'App\Http\Controllers\AuthController@reset');

    Route::get('/forgot', 'App\Http\Controllers\AuthController@forgotPassword');

    Route::get('/forgot', 'App\Http\Controllers\AuthController@forgotPassword');

    Route::get('/policies', 'App\Http\Controllers\Controller@privacyPolicies');

    Route::get('/terms', 'App\Http\Controllers\Controller@termsOfUse');

    Route::get('/{id}', 'App\Http\Controllers\ProductController@clientView');
});
