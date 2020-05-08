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
    return view('welcome');
});

Auth::routes();

Route::get('/profile/{user}/edit/', 'ProfilesController@edit')->name('profile.edit');
Route::get('/profile/{user}/', 'ProfilesController@index')->name('profile.index');
Route::patch('/profile/{user}/', 'ProfilesController@update' )->name('profile.update');


Route::get('/post/', 'PostsController@index')->name('post.index');
Route::post('/post/', 'PostsController@store')->name('post.store');
Route::get('/post/create/', 'PostsController@create')->name('post.create');
Route::get('/post/{post}/', 'PostsController@show')->name('post.show');
Route::get('/post/{post}/edit', 'PostsController@edit')->name('post.edit');


Route::get('/home', 'HomeController@index')->name('home');
