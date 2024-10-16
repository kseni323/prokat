<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
