<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/rentcar', function () {
    return view('rentcar');
});

// Route::get('/', function () {
//     return view('home');
// });
