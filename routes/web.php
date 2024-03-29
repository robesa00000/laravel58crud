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


Route::get('/', function() {
    return view('auth.login');
});
Auth::routes();

Route::resource('books', 'BookController');

Route::get('/books', 
    'BookController@index'
)->name('index');

Route::get('/create', 
    'BookController@create'
)->name('create');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
