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
		Route::get('/laptops', "ItemController@showItems")->name('laptops');
		Route::get('/laptops/categories/{id}', "CategoryController@findItems")->name('laptops');
		Route::get('/laptops/status/available', "StatusController@showAvailableItems")->name('laptops');
		Route::post('/laptops/search', "ItemController@searchFilterItems")->name('laptops');

		Route::get('/requests/{id}', "LaptopRequestController@showRequestPage")->name('requests');
		Route::patch('/requests/{id}/confirm', "LaptopRequestController@submitRequest")->name('requests');
		Route::patch('/user_requests/return/{id}', "LaptopRequestController@returnItem")->name('requests');
		Route::get('/history/user', "LaptopRequestController@showHistoryUser")->name('requests');

		Route::get('/categories', "CategoryController@showCategories")->name('categories');
		Route::post('/category/add', "CategoryController@addCategory")->name('categories');
		Route::patch('/category/{id}/edit', "CategoryController@updateCategory")->name('categories');
		Route::delete('/category/{id}/delete', "CategoryController@deleteCategory")->name('categories');

		Route::get('/laptops/add', "ItemController@showAddItemForm")->name('laptops');
		Route::post('/laptops/add', "ItemController@saveItems")->name('laptops');
		Route::get('/laptops/{id}/edit', "ItemController@showEditForm")->name('laptops');
		Route::get('/laptops/{id}', "ItemController@itemDetails")->name('laptops');
		Route::patch('/laptops/{id}', "ItemController@editItem")->name('laptops');
		Route::delete('/laptops/{id}/delete', "ItemController@deleteItem")->name('laptops');

		Route::get('/users', "UserController@showUsers")->name('users');
		Route::get('/users/approve/{id}', "UserController@approveUsers")->name('users');
		Route::get('/users/deactivate/{id}', "UserController@deactivateUsers")->name('users');
		Route::get('/users/edit/{id}', "UserController@showEditUsersPage")->name('users');
		Route::patch('/users/edit/update/{id}', "UserController@updateUserInfo")->name('users');

		Route::get('/user_requests', "LaptopRequestController@showUserRequests")->name('requests');
		Route::patch('/user_requests/approval/{id}', "LaptopRequestController@approveUserRequest")->name('requests');
		Route::patch('/user_requests/reject/{id}', "LaptopRequestController@rejectUserRequest")->name('requests');
		Route::patch('/user_requests/confirmreturn/{id}', "LaptopRequestController@confirmReturnItem")->name('requests');

		Route::get('/history', "LaptopRequestController@showHistory")->name('requests');


	});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
