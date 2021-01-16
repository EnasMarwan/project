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

Route::get('/mole', 'MoleController@index');
Route::get('/index', 'MoleController@search')->name('mole.search');
Route::get('/mole/create','MoleController@create' );
Route::get('mole/edit/{id}','MoleController@edit' )->name('mole.edit');
Route::put('mole/update/{id}','MoleController@update' )->name('mole.update');
Route::Post('/mole','MoleController@store' );
Route::get('/mole/{id}','MoleController@show' );
Route::delete('/mole/{id}','MoleController@destroy' )->name('mole.destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
