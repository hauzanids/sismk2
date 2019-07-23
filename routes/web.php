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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('informasi','InformasiController');
Route::get('/beranda', 'InformasiController@index');
Route::get('/beranda/{id}/edit','InformasiController@edit');
Route::post('/beranda/{id}/update','InformasiController@update');
Route::get('/beranda/{id}/delete','InformasiController@delete');

Route::get('/','LandingController@landing');

Route::get('/about','LandingController@about');

Route::get('/jadwal1', 'Jadwal1Controller@beranda');
Route::get('/jadwal1edit', 'Jadwal1Controller@index');
Route::get('/jadwal1edit/fetch_data', 'Jadwal1Controller@fetch_data');
Route::post('/jadwal1edit/add_data', 'Jadwal1Controller@add_data')->name('jadwal1.add_data');
Route::post('/jadwal1edit/update_data', 'Jadwal1Controller@update_data')->name('jadwal1.update_data');
Route::post('/jadwal1edit/delete_data', 'Jadwal1Controller@delete_data')->name('jadwal1.delete_data');

Route::get('/jadwal2', 'Jadwal2Controller@beranda');
Route::get('/jadwal2edit', 'Jadwal2Controller@index');
Route::get('/jadwal2edit/fetch_data', 'Jadwal2Controller@fetch_data');
Route::post('/jadwal2edit/add_data', 'Jadwal2Controller@add_data')->name('jadwal2.add_data');
Route::post('/jadwal2edit/update_data', 'Jadwal2Controller@update_data')->name('jadwal2.update_data');
Route::post('/jadwal2edit/delete_data', 'Jadwal2Controller@delete_data')->name('jadwal2.delete_data');

Route::get('/jadwal3', 'Jadwal3Controller@beranda');
Route::get('/jadwal3edit', 'Jadwal3Controller@index');
Route::get('/jadwal3edit/fetch_data', 'Jadwal3Controller@fetch_data');
Route::post('/jadwal3edit/add_data', 'Jadwal3Controller@add_data')->name('jadwal3.add_data');
Route::post('/jadwal3edit/update_data', 'Jadwal3Controller@update_data')->name('jadwal3.update_data');
Route::post('/jadwal3edit/delete_data', 'Jadwal3Controller@delete_data')->name('jadwal3.delete_data');

Route::resource('nirmana','NirmanaController');
Route::get('/nirmana', 'NirmanaController@index');
Route::get('/nirmana/{id}/download', 'NirmanaController@download')->name('nirmana.download');
Route::get('/nirmana/{id}/delete','NirmanaController@delete');

Route::resource('photography','PhotographyController');
Route::get('/photography', 'PhotographyController@index');
Route::get('/photography/{id}/download', 'PhotographyController@download')->name('photography.download');
Route::get('/photography/{id}/delete','PhotographyController@delete');

Route::resource('sistemkomputer','SistemkomputerController');
Route::get('/sistemkomputer', 'SistemkomputerController@index');
Route::get('/sistemkomputer/{id}/download', 'SistemkomputerController@download')->name('sistemkomputer.download');
Route::get('/sistemkomputer/{id}/delete','SistemkomputerController@delete');

Route::resource('typography','TypographyController');
Route::get('/typography', 'TypographyController@index');
Route::get('/typography/{id}/download', 'TypographyController@download')->name('typography.download');
Route::get('/typography/{id}/delete','TypographyController@delete');

Route::resource('videography','VideographyController');
Route::get('/videography', 'VideographyController@index');
Route::get('/videography/{id}/download', 'VideographyController@download')->name('videography.download');
Route::get('/videography/{id}/delete','VideographyController@delete');

Route::resource('multimedia','MultimediaController');
Route::get('/multimedia', 'MultimediaController@index');
Route::get('/multimedia/{id}/download', 'MultimediaController@download')->name('multimedia.download');
Route::get('/multimedia/{id}/delete','MultimediaController@delete');

Route::resource('webdesign','WebdesignController');
Route::get('/webdesign', 'WebdesignController@index');
Route::get('/webdesign/{id}/download', 'WebdesignController@download')->name('webdesign.download');
Route::get('/webdesign/{id}/delete','WebdesignController@delete');