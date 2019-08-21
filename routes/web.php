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

Route::post('/addUser', 'RegistrationController@add');


Route::group(['middleware' => ['loginCheck']], function(){


/////--------------------- Admin --------------------------
	

	Route::get('/userlist', 'UserListController@show')->name('userlist');
	Route::get('/carlist', 'UserListController@showCars')->name('carlist');

	



	Route::get('/userDelete', 'UserListController@deleteUser')->name('userDelete');


	Route::get('/userEdit', 'UserListController@edit')->name('userEdit');
	Route::post('/userEdit', 'UserListController@update')->name('userEdit');

	Route::get('/adminProfile', 'AdminController@profile')->name('admin.profile');
	Route::post('/adminProfile', 'AdminController@profileUpdate')->name('admin.profile');

	Route::get('/carEdit', 'CarListController@edit')->name('carEdit');
	Route::post('/carEdit', 'CarListController@update')->name('carEdit');
	Route::get('/carDelete', 'CarListController@deleteCar')->name('carDelete');


});


