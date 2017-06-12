<?php

use Illuminate\Http\Request;

Route::get('/', "TodoController@index");
Route::post('/', "TodoController@create");
Route::delete('/', 'TodoController@deleteAll');
Route::get('/{id}', "TodoController@get");
Route::patch('/{id}', "TodoController@update");
Route::delete('/{id}', "TodoController@delete");

