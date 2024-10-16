<?php

namespace App\Models;

use App\Models\Merk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['merk_id', 'type', 'slug', 'price', 'licensePlate', 'initialCondition', 'body', 'image'];

    public function merk(): BelongsTo
    {
        return $this->belongsTo(Merk::class);
    }

    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when($filters['search'] ?? false, fn($query, $search) => $query->where('type', 'like', '%' . $search . '%'));

        $query->when($filters['merks'] ?? false, fn($query, $merk) => $query->whereHas('merk', fn($query) => $query->where('slug', $merk)));
    }
}
