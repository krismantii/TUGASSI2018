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
  return redirect('home');
});

Route::get('/calender', function () {
  return view('calender/calender');
})->name('calender');

Route::get('/newhome', function () {
  return view('newhome');
});

Route::get('/seminar', function () {
  return view('seminar');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('$Pengaduans', '$PengaduanController');

Route::resource('pengaduans', 'PengaduanController');