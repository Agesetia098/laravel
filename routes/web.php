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



Route::get('/','PController@index');


Route::get('/login','PController@login');
Route::get('/bio/hapus/{id}','PController@hapus');

Route::get('/FormTambah','PController@FormTambah');
Route::POST('bio/tambah','PController@tambah');

Route::get('/bio/FormEdit/{id}','PController@FormEdit')