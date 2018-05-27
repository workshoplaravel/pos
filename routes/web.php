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

Route::get('/kategori', 'CategoryController@index');
Route::post('/kategori', 'CategoryController@simpan');
Route::get('/kategori/tambah', 'CategoryController@tambah');
Route::delete('/kategori/{id}', 'CategoryController@hapus');
Route::get('/kategori/{id}', 'CategoryController@edit');
Route::put('/kategori/{id}', 'CategoryController@perbaharui');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
