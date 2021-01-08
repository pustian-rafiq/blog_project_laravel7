<?php

use Illuminate\Support\Facades\Route;

 
Route::get('/', function () {
    return view('index');//index = blog page
});

Route::get('/post', function () {
    return view('post'); 
})->name('post');

//Admin Route

Route::get('/backend/home', function () {
    return view('layouts.backend.index'); 
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/post', 'HomeController@index')->name('post');
