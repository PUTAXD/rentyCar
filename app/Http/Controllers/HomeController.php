<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $topCars = Car::orderBy('price', 'desc')->take(3)->get();
        return view('home', [
            'title' => 'Home',
            'topCars' => $topCars
        ]);
    }
}
