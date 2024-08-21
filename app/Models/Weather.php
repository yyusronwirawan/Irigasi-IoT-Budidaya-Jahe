<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters) {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('created_at', 'like', '%' . $search . '%');
        })
        ->when($filters['sort'] ?? false, function ($query, $sort) {
            return $query->orderBy('created_at', $sort);
        })
        ->when($filters['kondisi'] ?? false, function ($query, $kondisi) {
            return $query->where('probabilitas', 'like', '%' . $kondisi . '%');
        });
    }
}