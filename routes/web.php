<?php

use App\Models\Car;
use App\Models\Merk;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/rentcars', function () {
    dump(request('merks'));
    return view('rentcars', [
        'title' => 'rentCars',
        'rentcars' => Car::filter(request(['search','merks']))->latest()->simplepaginate(9)
    ]);

});

Route::get('/merks/{merk:slug}', function (Merk $merk) {
    // $posts = $category->posts->load('category','author');
    return view('rentcars', ['title' => ' Article in : '.$merk->name, 'rentcars' => $merk->cars]);
});

// Route::get('/', function () {
//     return view('home');
// });
