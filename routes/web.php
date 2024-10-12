<?php

use App\Models\Car;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/rentcars', function () {
    return view('rentcars', [
        'title' => 'rentCars',
        'rentcars' => Car::latest()->get()
    ]);

});

// Route::get('/', function () {
//     return view('home');
// });
