<?php

use Illuminate\Support\Facades\Route;
//User Route
 
Route::group(['namespace' => 'User'], function(){

Route::get('/','HomeController@index')->name('post');
Route::get('post','PostController@index');
});

 
//Admin Route

Route::group(['namespace' => 'Admin'], function(){

	Route::get('admin/home','HomeController@index')->name('admin.index');


//User Route
	Route::resource('admin/user','UserController');
//Post Route
	Route::resource('admin/post','PostController');
	 
 //Category Route
	Route::resource('admin/category','CategoryController');
//Tag Route
	Route::resource('admin/tag','TagController') ;
 
	});
	


Auth::routes();

 
//Route::get('/post', 'HomeController@index')->name('post');
