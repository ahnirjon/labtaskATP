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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'IndexController@index')->name('index');

Route::post('/loginVerify', 'LoginController@verify');

Route::get('/logout', 'LoginController@sessionRemove')->name('logout');




Route::group(['middleware' => ['loginCheck']], function(){


/////--------------------- Admin --------------------------
	

	Route::get('/userlist', 'UserListController@show')->name('userlist');

	Route::post('/addUser', 'RegistrationController@add');



	Route::get('/userDelete', 'UserListController@deleteUser')->name('userDelete');


	Route::get('/userEdit', 'UserListController@edit')->name('userEdit');
	Route::post('/userEdit', 'UserListController@update')->name('userEdit');


});


