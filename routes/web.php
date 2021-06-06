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

Route::get('/', 'App\Http\Controllers\Controller@index');

Route::get('/contact', 'App\Http\Controllers\Controller@contactUs');

Route::get('/about', 'App\Http\Controllers\Controller@aboutUs');

Route::get('/signup', 'App\Http\Controllers\AuthController@signUp');

Route::get('/signin', 'App\Http\Controllers\AuthController@signIn');

Route::get('/reset', 'App\Http\Controllers\AuthController@reset');

Route::get('/forgot', 'App\Http\Controllers\AuthController@forgotPassword');

Route::get('/forgot', 'App\Http\Controllers\AuthController@forgotPassword');

Route::get('/policies', 'App\Http\Controllers\Controller@privacyPolicies');

Route::get('/terms', 'App\Http\Controllers\Controller@termsOfUse');

Route::get('/{id}', 'App\Http\Controllers\ProductController@clientView');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
