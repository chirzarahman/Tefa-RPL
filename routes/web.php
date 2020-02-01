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
Route::get('/', 'OrderController@create');
Route::post('/order', 'OrderController@store');

Route::get('/admin', function () {
    return view('auth.login');
});

Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index');
Route::get('/profile', 'HomeController@profile');
Route::get('/add-product', 'HomeController@addproduct');
Route::get('/product', 'ProductController@index');
Route::get('/detail-order/{order}', 'OrderController@show');

Route::post('/add/product', 'ProductController@store');
Route::get('/edit/{product}', 'ProductController@edit');
Route::patch('/edit/product/{product}', 'ProductController@update');
Route::delete('/trash/{order}','OrderController@destroy');