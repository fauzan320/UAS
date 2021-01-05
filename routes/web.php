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

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('pesan/{id}', 'PesanController@index')->name('pesan');
Route::post('pesanmasuk/{id}', 'PesanController@pesanmasuk')->name('pesanmasuk');
Route::get('Check_out', 'PesanController@Check_out')->name('Check_out');
Route::delete('delete/{id}', 'PesanController@delete')->name('delete');
Route::get('konfirmasi_check_out','PesanController@konfirmasi_check_out')->name('konfirmasi_check_out');

Route::delete('edit/{id}', 'PesanController@edit')->name('edit');
Route::post('pesanmasukupdate/{id}', 'PesanController@pesanmasukupdate')->name('pesanmasukupdate');

Route::get('profile','ProfilController@index')->name('profile');
Route::post('profile','ProfilController@update')->name('profilepost');

Route::get('history','HistoryController@index')->name('history');
Route::get('history/{id}','HistoryController@detail')->name('historydetail');
