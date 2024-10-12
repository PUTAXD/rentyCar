<?php

namespace Database\Seeders;

use App\Models\Car;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Merk;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\MerkSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([MerkSeeder::class]);


        Car::factory(12)->recycle([
            Merk::all(),
        ])->create();

    }
}
