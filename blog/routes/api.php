<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('cors')->group(function(){
    Route::get('/','PostController@get');
    Route::delete('/{id}','PostController@delete');
    Route::put('/{id}','PostController@put');
    Route::post('/','PostController@post');
 });

