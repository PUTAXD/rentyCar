<?php

namespace App\Models;

use App\Models\Car;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Merk extends Model
{
    /** @use HasFactory<\Database\Factories\MerkFactory> */
    use HasFactory;

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }
}
