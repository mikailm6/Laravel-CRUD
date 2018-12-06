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
    return redirect('tests/');
});

Route::get('/dokter', function () {
    return redirect('dokters/');
});

Route::get('/jadwal', function () {
    return redirect ('jadwals/');
});

Route::get('/add', function () {
    return view('tests/create');
});

Route::get('/add-dokter', function () {
    return view('dokters/create-dokter');
});

Route::get('/add-jadwal', function () {
    return view('jadwals/create-jadwal');
});

Route::resource('tests','TestController');
Route::resource('jadwals','JadwalController');
Route::resource('dokters','DokterController');