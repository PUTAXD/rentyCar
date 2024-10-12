<?php

namespace App\Models;

use App\Models\Merk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;

    public function merk(): BelongsTo
    {
        return $this->belongsTo(Merk::class);
    }
}
