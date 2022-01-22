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
| I Gde Bagus Ngurah Aditya Darma Giri
*/

Route::middleware('auth')->get('/','DashboardController@index')->name('Homepage');

Auth::routes();

// group admin
Route::middleware('auth')->group(function () {
    // CRUD
    Route::resource('disposisi', 'Admin\DisposisiController');
    Route::resource('suratmasuk','Admin\SuratMasukController');
    Route::resource('suratkeluar','Admin\SuratKeluarController');
    Route::resource('kategori','Admin\KategoriController');


    // pdf disposisi
    Route::get('/printPdf/{id}','Admin\DisposisiController@printReport');

    // download 
    Route::get('/downloadmasuk/{id}','Admin\SuratMasukController@downloadfile');
    Route::get('/downloadkeluar/{id}','Admin\SuratKeluarController@downloadkeluar');

});


Route::get('/home', 'HomeController@index')->name('home');
