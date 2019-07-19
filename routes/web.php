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
Route::resource('informasi','InformasiController');
Route::get('/beranda', 'InformasiController@index');
Route::get('/beranda/{id}/edit','InformasiController@edit');
Route::post('/beranda/{id}/update','InformasiController@update');
Route::get('/beranda/{id}/delete','InformasiController@delete');