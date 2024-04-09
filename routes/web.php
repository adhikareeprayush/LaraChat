<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\PusherController@index');
Route::post('/broadcast', 'App\Http\Controllers\PusherController@broadcast');
Route::post('/receive', 'App\Http\Controllers\PusherController@receive');

Route::get('test', function () {
    event(new App\Events\PusherBroadcast('John'));
    return "Event has been sent!";
});