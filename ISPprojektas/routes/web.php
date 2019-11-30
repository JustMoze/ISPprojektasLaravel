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
Route::resource('rooms', 'RoomController');

// Route::get('/Profile', 'HomeController@getProfile')->name('profile');
Route::get('/Profile', function () {
    return view('profile');
})->name('profile-window');

Route::get('/', function () {
    return view('home');
})->name('main-Page');

//Nuolaidos trinimas
//Route::delete('/Discount', 'DiscountController@destroy')->name('Delete');
Route::get('/Discount/{id}','DiscountController@destroy');

Route::get('/UpdateDiscount/{id}','DiscountController@edit');

Route::post('update/{id_Nuolaida}','DiscountController@update');
//Nuolaidu perziura
Route::get('/Discounts', 'DiscountController@getNuolaidas')->name('Discounts');

//Prideti Nuolaida
Route::get('/AddDiscount', function(){
    return view('AddDiscount');
})->name('Discount-add-form');

//prideda nauja nuolaida
Route::post('AddDiscount/submit', 'DiscountController@submit')->name('Discount-submit-form');

//Atsiliepimu perziura
Route::get('/Comments', 'CommentController@getAtsiliepimus')->name('get-Comments');

//nusiskundimu perziura
Route::get("/Complaints", 'ComplaintController@getNusiskundimai')->name('get-Complaints');

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

// Route::get('/Room', function() {
//   return view('room');
// })->name('room-page');

// this will bind all contrller's action
Route::resource('rooms', 'RoomController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/rooms', 'RoomController@show')->name('payment');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// User controller's routes
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:usersManagement')->group(function(){
  Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'edit']]);
});
