<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/cars', function () {
    return view('cars');
});

Route::get('/car1', function () {
    return view('car1');
});

require __DIR__.'/auth.php';
