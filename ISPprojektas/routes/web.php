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

Route::get('/', 'RoomController@index');
Route::get('/Profile', function () {
    return view('profile');
})->name('profile-window');

Route::get('/Registration', function () {
    return view('registration');
})->name('registration-Form');

Route::get('/Login', function () {
    return view('login');
})->name('login-Form');

Route::get('/Room', function() {
  return view('room');
})->name('room-page');

// this will bind all contrller's action
Route::resource('rooms', 'RoomController');
