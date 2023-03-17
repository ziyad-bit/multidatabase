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

Route::get('/', 'AuthController@get_login')->name('get.login');

Route::post('/', 'AuthController@post_login')->name('post.login');

Route::get('/signup', 'AuthController@get_signup')->name('get.signup');

Route::post('/signup', 'AuthController@post_signup')->name('post.signup');

Route::get('/logout', 'AuthController@logout')->name('logout');

Route::get('/items', 'ItemsController@index')->name('items.index');

Route::get('/items/show/{id}/{db}', 'ItemsController@show')->name('items.show');
