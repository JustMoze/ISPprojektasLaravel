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


Route::get('/', 'RoomController@getHome')->name('home');

Route::get('/Profile', 'RoomController@getProfile')->name('profile');

Route::get('/Registration', 'RoomController@getRegistration')->name('registration');

Route::get('/rooms', 'RoomController@index');

// Route::get('/Profile', function () {
//     return view('profile');
// })->name('profile-window');

//Route::resource('rooms', 'RoomController');

// Route::get('/Registration', function () {
//     return view('registration');
// })->name('registration-Form');

// Route::get('/', function () {
//     return view('home');
// })->name('main-Page');

// Route::get('/Login', function () {
//     return view('login');
// })->name('login-Form');

Route::get('/Login', 'RoomController@getLogin')->name('login');

//Atsiliepimu perziura
//Route::get('/Comments', 'CommentController@getAtsiliepimus')->name('get-Comments');

//nusiskundimu perziura
//Route::get("/Complaints", 'ComplaintController@getNusiskundimai')->name('-get-Complaints');

//prideti nauja atsiliepima
// Route::get('/Addcomment', function(){
//     return view('Addcomment');
// })->name('Comment-add-form');

// //prideti nauja nusiskundima
// Route::get('/Addcomplaint', function(){
//     return view('Addcomplaint');
// })->name('Complaint-add-form');

// //prideda nauja atsiliepima
// Route::post('Addcomment/submit', 'CommentController@submit')->name('Comment-submit-form');

//prideda nauja nusiskundima
// Route::post('Addcomplaint/submit', 'ComplaintController@submit')->name('Complaint-submit-form');

Route::get('/Room', function() {
  return view('room');
})->name('room-page');

Route::get('/Complaints', 'ComplaintController@index');

Route::resource('Complaints', 'ComplaintController');

Route::get('/Comments', 'CommentController@index');

Route::resource('Comments', 'CommentController');

// this will bind all contrller's action
Route::resource('rooms', 'RoomController');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/rooms', 'RoomController@show')->name('payment');
