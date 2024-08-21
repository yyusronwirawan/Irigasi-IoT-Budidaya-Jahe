<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manual extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function statusmanual() {
        return $this->hasMany(StatusManual::class);
    }
}