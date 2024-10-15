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

})->name('rentcars');

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

Route::delete('/rentcars/{id}', [RentCarController::class, 'destroy'])->name('rentcar.destroy');

Route::get('/rentcars/{id}/edit', [RentCarController::class, 'edit'])->name('rentcar.edit');
Route::put('/rentcars/{id}', [RentCarController::class, 'update'])->name('rentcar.update');
// Route::get('/', function () {
//     return view('home');
// });
