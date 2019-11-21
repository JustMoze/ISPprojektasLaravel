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
    return view('home');
});

Route::get('/Profile', function () {
    return view('profile');
})->name('profile-window');

Route::get('/Registration', function () {
    return view('registration');
})->name('registration-Form');

Route::get('/Login', function () {
    return view('login');
})->name('login-Form');

Route::get('/Comments', function(){
  return view('Comments');
})->name('all-Comments');

Route::get("/Complaints", function(){
  return view('Complaints');
})->name('all-Complaints');

Route::get('/Addcomment', function(){
    return view('Addcomment');
})->name('Comment-add-form');

Route::get('/Addcomplaint', function(){
    return view('Addcomplaint');
})->name('Complaint-add-form');

Route::post('Addcomment/submit', 'CommentController@submit')->name('Comment-submit-form');

Route::post('Addcomplaint/submit', 'ComplaintController@submit')->name('Complaint-submit-form');
