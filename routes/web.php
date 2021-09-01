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

Auth::routes(['register' => false]);

Route::get('/posts/{post}', 'guestPostController@show');
Route::get('/', 'guestPostController@index');
// Route::get('/mailsend', 'mailController@send');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/create','PostController@create');
    Route::get('/posts','PostController@store');
    Route::post('/posts','PostController@store');
    Route::get('/posts/{post}/edit', 'PostController@edit');
    Route::put('/posts/{post}', 'PostController@update');
    Route::delete('/posts/{post}', 'PostController@destroy');
    
});


 Route::get('/home', 'HomeController@index')->name('home');

