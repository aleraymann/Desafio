<?php

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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products', 'ProductController');
Route::get('/newProduct', 'ProductController@create');
Route::post('/newProduct', 'ProductController@store')->name('products.store');
Route::get('/products/edit/{id}', 'ProductController@edit');
Route::post('/products/{id}', 'ProductController@update');
Route::delete('/{id}', 'ProductController@destroy');

Route::get('/user', 'UserController@index');
Route::get('/user/delete/{id}', 'UserController@destroy');


