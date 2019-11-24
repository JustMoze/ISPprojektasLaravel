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

Route::get('/rooms', 'RoomController@index');
Route::get('/Profile', function () {
    return view('profile');
})->name('profile-window');

Route::resource('rooms', 'RoomController');
Route::get('/Registration', function () {
    return view('registration');
})->name('registration-Form');

Route::get('/', function () {
    return view('home');
})->name('main-Page');

Route::get('/Login', function () {
    return view('login');
})->name('login-Form');
// this will bind all contrller's action
Route::resource('rooms', 'RoomController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/rooms', 'RoomController@show')->name('payment');
