<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


 

 
 
Route::get('posts', 'PostController@index');
Route::group(['prefix' => 'post'], function () {
    Route::post('add', 'PostController@add');
    Route::get('edit/{id}', 'PostController@edit');
    Route::post('update/{id}', 'PostController@update');
    Route::delete('delete/{id}', 'PostController@delete');
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
