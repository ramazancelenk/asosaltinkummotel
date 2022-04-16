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

Route::post('/rezervasyon', 'FrontPageController@postRezervation');

Route::get('/rezervasyon', function () {
    return view('booking');
});

Route::get('/ulasim', function () {
    return view('location');
});

Route::get('/mesajlar', function () {
    return view('messages');
});

Route::get('/fotograflar', function () {
    return view('photos');
});

Route::post('/', 'FrontPageController@postCustomerPhone');

Route::get('/', function () {
    return view('index');
});
