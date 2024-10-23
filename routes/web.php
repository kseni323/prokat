<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/cars', function () {
    return view('cars');
});

require __DIR__.'/auth.php';
