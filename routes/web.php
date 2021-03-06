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
    return view('welcome');
});

// Route::get('/siswa', 'SiswaController@index');
// Route::get('/simpan-siswa', 'SiswaController@proses_simpan');
// Route::post('/simpan', 'SiswaController@proses_simpan');
// Route::get('/siswabaru', 'SiswabaruController@index');


Route::get('/calonsiswa', 'CalonsiswaController@index')->name('calonsiswa.index');
Route::get('/calonsiswa/create', 'CalonsiswaController@create')->name('calonsiswa.create');
Route::post('/calonsiswa', 'CalonsiswaController@store')->name('calonsiswa.store');


//tampil edit data
Route::get('/calonsiswa/{calonsiswa}/edit', "CalonsiswaController@viewform");
//edit data
Route::patch('/calonsiswa/{calonsiswa}', "CalonsiswaController@prosesEdit");
//tampil 1 data
Route::get('/calonsiswa/{calonsiswa}', 'CalonsiswaController@show');
//hapus siswa
Route::get('/hapussiswa/{calonsiswa}', 'CalonsiswaController@delete')->name('calonsiswa.delete');
