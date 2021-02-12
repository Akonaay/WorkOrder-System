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

/* 
---My sample codes---

// This is Dynamic route that accept two (2) params
Route::get('/users/{id}/{name}', function ($id,$name) {
    return 'Username ' .$name. '  and Id is ' . $id;
});

*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts','PostsController');
Route::resource('workorders','WorkorderController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
