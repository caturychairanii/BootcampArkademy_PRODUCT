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
    return view('index');
});

Route::get("/produk", "ProdukController@index");
Route::get('/produk/tambah', "ProdukController@create");
Route::post('/produk/store', "ProdukController@store");
Route::get('/produk/edit/{id}', "ProdukController@edit");
Route::post('/produk/update/{id}', "ProdukController@update");
Route::get('/produk/hapus/{id}', "ProdukController@destroy");
