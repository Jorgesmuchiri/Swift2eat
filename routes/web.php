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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('dashboard');

Route::get('/', 'App\Http\Controllers\FrontEndController@index')->name('welcome');


Route::get('restaurant-detail/{id}', 'App\Http\Controllers\FrontEndController@restaurant_detail')->name('restaurant-detail');





Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::resource('products', 'App\Http\Controllers\ProductsController', ['except' => ['show']]);
	Route::resource('categories', 'App\Http\Controllers\CategoriesController', ['except' => ['show']]);
	
	


	Route::resource('orders', 'App\Http\Controllers\OrdersController', ['except' => ['show']]);
	Route::resource('vendors', 'App\Http\Controllers\VendorController', ['except' => ['show']]);
	Route::resource('banner', 'App\Http\Controllers\BannerController', ['except' => ['show']]);


	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::patch('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::patch('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);


	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);



});



