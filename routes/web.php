<?php

use App\Models\Car;
use App\Models\Merk;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentCarController;

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

Route::get('/rentcars/{rentcar:slug}', function(Car $rentcar){

    return view('rentcar', ['title' => 'Single Post', 'rentcar' => $rentcar]);
});

Route::get('/merks/{merk:slug}', function (Merk $merk) {
    // $posts = $category->posts->load('category','author');
    return view('rentcars', ['title' => ' Article in : '.$merk->name, 'rentcars' => $merk->cars]);
});

// Route::get('/createcar',function(){
//     return view('createCar');
// });

Route::get('/create', [RentCarController::class, 'create'])->name('create');
Route::post('/store', [RentCarController::class, 'store'])->name('store');
// Route::get('/', function () {
//     return view('home');
// });
