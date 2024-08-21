<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function block() {
        return $this->belongsTo(Block::class);
    }
}