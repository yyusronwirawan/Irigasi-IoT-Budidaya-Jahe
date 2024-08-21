<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = [
        'device_id', 'noJadwal', 'hari', 'sol_1', 'sol_2', 'sol_3', 'sol_4', 'jam', 'menit', 'detik', 'status'
    ];

    protected $with = ['device'];
    public function device() {
        return $this->belongsTo(Device::class, 'device_id', 'id');
    }
}