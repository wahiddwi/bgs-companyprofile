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

Route::get('/', 'DashboardController@index')->name('user.dashboard');
Route::get('tentangkami', 'TentangKamiController@index')->name('user.tentangkami');
Route::get('layanan', 'LayananController@index')->name('user.layanan');
// Route::get('kontak', 'ContactController@create')->name('user.kontak');
// Route::post('kontak/create', 'ContactController@store')->name('user.kontak.store');
Route::resource('kontak', 'KontakController', [
    'as' => 'user'
]);

//Admin

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function(){
        Route::resource('layanan', 'LayananController', [
            'as' => 'admin'
        ]);
        Route::resource('kontak', 'KontakController', [
            'as' => 'admin'
        ]);
        Route::resource('lokasi', 'LokasiController', [
            'as' => 'admin'
        ]);
    });
