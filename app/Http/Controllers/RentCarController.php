<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Merk;
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
        $merks = Merk::all();
        return view('createCar',  compact('merks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi form
        $validatedData = $request->validate([
            'merk_id' => 'required|exists:merks,id',
            'slug' => 'required|string',
            'licensePlate' => 'required|string',
            'initialCondition' => 'required|string',
            'body' => 'required|string',
            'price' => 'required|numeric',
            'type' => 'required|string', // Field type harus diisi
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            // $image->storeAs('public/products', $image->hashName());
            $imageName = $image->hashName(); // Nama gambar yang di-hash untuk menghindari duplikat nama
            $image->move(public_path('carImage'), $imageName); // Simpan gambar
            $validatedData['image'] = $imageName; // Simpan path gambar ke database
        }

        // Menyimpan data ke database

        // Car::create([
        //     'merk_id'           => $request->merk_id,
        //     'slug'              => $request->slug,
        //     'licensePlate'      => $request->licensePlate,
        //     'initialCondition'  => $request->initialCondition,
        //     'body'              => $request->body,
        //     'price'             => $request->price,
        //     'image'             => $imagePath, // Simpan nama file gambar (jika ada)
        // ]);

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

    public function edit($id)
    {
        // Cari data berdasarkan ID
        $car = Car::findOrFail($id);

        // Menampilkan form edit dan mengirim data yang ditemukan
        return view('editCar', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    // Menyimpan data yang telah diedit
    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'merk_id' => 'required|string',
            'slug' => 'required|string',
            'licensePlate' => 'required|string',
            'initialCondition' => 'required|string',
            'body' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Cari data berdasarkan ID
        $car = Car::findOrFail($id);

        // Jika ada file gambar baru yang diunggah
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            // $image->storeAs('public/products', $image->hashName());
            $imageName = $image->hashName(); // Nama gambar yang di-hash untuk menghindari duplikat nama
            $image->move(public_path('carImage'), $imageName); // Simpan gambar
            $validatedData['image'] = $imageName; // Simpan path gambar ke database
        }

        // Update data dengan input baru
        $car->update($validatedData);

        // Redirect ke halaman list dengan pesan sukses
        return redirect()->route('rentcars')->with('success', 'Car has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        // Hapus data dari database
        $car->delete();

        // Redirect dengan pesan sukses setelah data dihapus
        return redirect()->route('rentcars')->with('success', 'Data has been deleted successfully!');
    }
}
