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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/productos/index', 'ProductosController@index')->name('productos.index')->middleware('auth');
Route::get('/productos/create', 'ProductosController@create')->name('productos.create')->middleware('auth');
Route::post('/productos/store', 'ProductosController@store')->name('productos.store')->middleware('auth');
