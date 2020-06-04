<?php

use App\Http\Controllers\Mahasiswa;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// CRUD Mahasiswa Table
Route::get('/home', 'Home@index');
Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/mahasiswa/tambahmhs', 'MahasiswaController@tambah');
Route::post('/mahasiswa/cekMhs', 'MahasiswaController@cekMhs');
Route::get('/mahasiswa/editmhs/{id}', 'MahasiswaController@edit');
Route::post('/mahasiswa/updateMhs', 'MahasiswaController@updateMhs');
Route::delete('/mahasiswa/{id}', 'MahasiswaController@delete');
Route::get('/mahasiswa/cari', 'MahasiswaController@cari');

// Route::resource('mahasiswa', 'MahasiswaController');



