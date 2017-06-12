<?php

use Illuminate\Http\Request;

Route::get('/', 'TodosController@index');
Route::post('/', 'TodosController@create');
Route::delete('/', 'TodosController@deleteAll');
Route::get('/{id}', 'TodosController@show');
Route::patch('/{id}', 'TodosController@update');
Route::delete('/{id}', 'TodosController@delete');

