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
    return view('auth.register');
});




Route::middleware("auth")->group(function (){ 
		Route::get('/laptops', "ItemController@showItems");
		Route::get('/laptops/categories/{id}', "CategoryController@findItems");
		Route::get('/laptops/status/available', "StatusController@showAvailableItems");
		Route::post('/laptops/search', "ItemController@searchFilterItems");

		Route::get('/requests/{id}', "LaptopRequestController@showRequestPage");
		Route::patch('/requests/{id}/confirm', "LaptopRequestController@submitRequest");
		Route::patch('/user_requests/return/{id}', "LaptopRequestController@returnItem");
		Route::get('/history/user', "LaptopRequestController@showHistoryUser");

		Route::get('/laptops/add', "ItemController@showAddItemForm");
		Route::post('/laptops/add', "ItemController@saveItems");
		Route::get('/laptops/{id}/edit', "ItemController@showEditForm");
		Route::get('/laptops/{id}', "ItemController@itemDetails");
		Route::patch('/laptops/{id}', "ItemController@editItem");
		Route::delete('/laptops/{id}/delete', "ItemController@deleteItem");

		Route::get('/users', "UserController@showUsers");
		Route::get('/users/approve/{id}', "UserController@approveUsers");
		Route::get('/users/deactivate/{id}', "UserController@deactivateUsers");

		Route::get('/user_requests', "LaptopRequestController@showUserRequests");
		Route::patch('/user_requests/approval/{id}', "LaptopRequestController@approveUserRequest");
		Route::patch('/user_requests/reject/{id}', "LaptopRequestController@rejectUserRequest");
		Route::patch('/user_requests/confirmreturn/{id}', "LaptopRequestController@confirmReturnItem");

		Route::get('/history', "LaptopRequestController@showHistory");


	});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
