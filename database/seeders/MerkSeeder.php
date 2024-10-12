<?php

namespace Database\Seeders;

use App\Models\Merk;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MerkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Merk::create([
            'name' => 'BMW',
            'slug' => 'bmw',
            'color' => 'red'
         ]);

         Merk::create([
             'name' => 'Mercedes',
             'slug' => 'mercedes',
             'color' => 'green'
         ]);

         Merk::create([
             'name' => 'Honda',
             'slug' => 'honda',
             'color' => 'blue'
         ]);

         Merk::create([
             'name' => 'Toyota',
             'slug' => 'toyota',
             'color' => 'yellow'
         ]);
    }
}
