<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers;
use App\Http\Middleware;

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

Route::get('/', 'App\Http\Controllers\MainController@index')->name('home');

// Route::get('/prices', 'App\Http\Controllers\MainController@prices');
// Route::get('/prices/booking', 'App\Http\Controllers\MainController@booking');

Route::get('/contacts', 'App\Http\Controllers\MainController@contacts');

Route::group(['prefix'=>'prices', 'namespace'=>'App\Http\Controllers'], function () {
    Route::get('/', [NumberController::class, 'prices'])->name('prices');
    Route::get('/booking', [NumberController::class, 'booking'])->name('booking');
});

Route::get('/gallery', 'App\Http\Controllers\MainController@gallery');

Route::group(['prefix'=>'adm', 'middleware'=>'App\Http\Middleware\AdminMiddleware', 'namespace'=>'App\Http\Controllers'], function () {
    Route::get('/', [AdmController::class, 'index'])->name('adm.index');
    Route::resource('/categories', 'Adm\CategoryController');
    Route::resource('/gallery', 'Adm\GalleryController');
    Route::resource('/numbers', 'Adm\NumberController');
});

Route::group(['middleware'=>'guest', 'namespace'=>'App\Http\Controllers'], function() {
Route::get('/login', 'UserController@loginForm')->name('login.create');
Route::post('/login', 'UserController@login')->name('login');
});
Route::get('/logout', 'App\Http\Controllers\UserController@logout')->name('logout')->middleware('auth');

Route::get('/register', 'App\Http\Controllers\UserController@create')->name('register.create');
Route::post('/register', 'App\Http\Controllers\UserController@store')->name('register.store');


