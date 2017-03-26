<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'MessagesController@index');

Route::resource('messages', 'MessagesController');


// CRUD

// Route::get('messages/{id}', 'MessagesController@show');
// Route::post('messages', 'MessagesController@store');
// Route::put('messages/{id}', 'MessagesController@update');
// Route::delete('messages/{id}', 'MessagesController@destroy');

// index: showの補助ページ
// Route::get('messages/{id}', 'MessagesController@store');

// create: 新規作成用のフォームページ
// Route::get('messages/create', 'MessagesController@create');

// edit: 更新用のフォームページ
// Route::get('messages/{id}/edit', 'MessagesController@edit');

