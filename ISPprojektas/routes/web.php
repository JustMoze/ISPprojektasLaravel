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


Route::get('/rooms', 'RoomController@index')->name('rooms-page');
Route::resource('rooms', 'RoomController');

Route::get('/AddRoom', function () {
  return view('AddRoom');
})->name('Room-add-form');

Route::post('AddRoom/submit', 'RoomController@submit')->name('AddRoom');
Route::post('RoomEdit/{room}', 'RoomController@Update')->name('UpdateRoom');
Route::delete('/rooms/{roomid}', 'RoomController@destroy')->name('DeleteRoom');
// Route::get('/Profile', 'HomeController@getProfile')->name('profile');
Route::get('/Profile', function () {
  return view('profile');
})->name('profile-window');

Route::get('/', function () {
  return view('home');
})->name('main-Page');

//Nuolaidos trinimas
//Route::delete('/Discount', 'DiscountController@destroy')->name('Delete');
Route::get('/Discount/{id}', 'DiscountController@destroy');

Route::get('/UpdateDiscount/{id}', 'DiscountController@edit');

Route::post('update/{id_Nuolaida}', 'DiscountController@update');
//Nuolaidu perziura
Route::get('/Discounts', 'DiscountController@getNuolaidas')->name('Discounts');

Route::delete('/Profile/{user}', 'Admin\UsersController@deleteMyself')->name('deleteMySelf');
Route::get('/Profile/{id}', 'Admin\UsersController@ShowProfile')->name('ShowProfile');
//Prideti Nuolaida
Route::get('/AddDiscount', function () {
  return view('AddDiscount');
})->name('Discount-add-form');

Route::namespace('Rezervacija')->name('rezervacija')->group(function () {
  Route::resource('/rezervacija', 'RezervacijaController');
});

//prideda nauja nuolaida
Route::post('AddDiscount/submit', 'DiscountController@submit')->name('Discount-submit-form');
Route::get('profile/{user}/edit', 'Admin\UsersController@edit')->name('ProfileEdit');
Route::put('profile/{user}', 'Admin\UsersController@updateUser')->name('updateUser');

Route::get("/kambarioRezervacija", 'Rezervacija\RezervacijaController@rezervationChecker')->name('rezervationComplete');
// Route::get('kambarioRezervacija', array('as' => 'rezervationComplete', 'uses' => 'Rezervacija\RezervacijaController@rezervationChecker', function($user_id, $room_id)
// {
//     //
// }));
Route::post("/kambario", 'Rezervacija\RezervacijaController@storeDate')->name('withUser');
//prideti nauja nusiskundima
Route::get('/Addcomplaint', function () {
  return view('Addcomplaint');
})->name('Complaint-add-form');

Route::get('/Complaints', 'ComplaintController@index');

Route::resource('Complaints', 'ComplaintController');

Route::get('/Comments', 'CommentController@index');

Route::resource('Comments', 'CommentController');

// this will bind all contrller's action
Route::resource('rooms', 'RoomController');

Route::get('/search', 'RoomController@search');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/payement', 'RoomController@show')->name('payment');

Auth::routes();
// User controller's routes
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:usersManagement')->group(function () {
  Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'edit']]);
});

Route::namespace('Payments')->group(function () {
  Route::resource('/payments', 'PaymentController');
});

Route::get('/payment', 'Payments\PaymentController@showPayment')->name('payment-page');
//Route::get('/paymentai', 'Payments\PaymentController@saveCardData')->name('payment-update');
Route::get('paymentai', array('as' => 'payment-update', 'uses' => 'Payments\PaymentController@saveCardData', function ($user_id, $room_id) {
  //
}));
Route::get('myRezervations', 'Rezervacija\RezervacijaController@myRezervations')->name('my-rezervations');
Route::get('/comment/{roomId}', 'CommentController@createComment')->name('create-comment');
Route::post('/comment', 'CommentController@store')->name('store-comment');

Route::get('/complaint/{roomId}', 'ComplaintController@createComplaint')->name('create-complaint');
Route::post('/complaint', 'ComplaintController@store')->name('store-complaint');

Route::get('/information', 'HotelController@index')->name('info');
