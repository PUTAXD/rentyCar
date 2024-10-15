<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class RentCarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createCar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validasi form
         $validatedData = $request->validate([
            'merk_id' => 'required|string',
            'slug' => 'required|string',
            'licensePlate' => 'required|string',
            'initialCondition' => 'required|string',
            'body' => 'required|string',
            'price' => 'required|numeric',
            'type' => 'required|string',  // Field type harus diisi
        ]);

        // Menyimpan data ke database
        Car::create($validatedData);

        // Redirect ke halaman lain setelah menyimpan data
        return redirect()->route('create')->with('success', 'Data has been saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }
}
