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

Route::get('/', 'RoomController@index')->name('home');;

Route::get('/Profile', 'RoomController@getProfile')->name('profile');

Route::get('/Registration', 'RoomController@getRegistration')->name('registration');

Route::get('/Login', 'RoomController@getLogin')->name('login');

//Atsiliepimu perziura
Route::get('/Comments', 'CommentController@getAtsiliepimus')->name('get-Comments');

//nusiskundimu perziura
Route::get("/Complaints", 'ComplaintController@getNusiskundimai')->name('-get-Complaints');

//prideti nauja atsiliepima
Route::get('/Addcomment', function(){
    return view('Addcomment');
})->name('Comment-add-form');

//prideti nauja nusiskundima
Route::get('/Addcomplaint', function(){
    return view('Addcomplaint');
})->name('Complaint-add-form');

//prideda nauja atsiliepima
Route::post('Addcomment/submit', 'CommentController@submit')->name('Comment-submit-form');

//prideda nauja nusiskundima
Route::post('Addcomplaint/submit', 'ComplaintController@submit')->name('Complaint-submit-form');

Route::get('/Room', function() {
  return view('room');
})->name('room-page');

// this will bind all contrller's action
Route::resource('rooms', 'RoomController');
