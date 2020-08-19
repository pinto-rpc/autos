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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/autos', 'AutoController@index');
Route::post('/autos', 'AutoController@store')->name('autos.store');
Route::get('/autos/editar/{id}', 'AutoController@editView')->name('autos.editView');
Route::post('/autos/{id}', 'AutoCrontroller@edit')->name('autos.edit');
Route::delete('/autos/{id}', 'AutoController@destroy')->name('autos.destroy');

