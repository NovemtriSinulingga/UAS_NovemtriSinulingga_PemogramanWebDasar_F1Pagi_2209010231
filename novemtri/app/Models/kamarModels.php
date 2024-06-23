<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
        protected $fillable = [
        'level',
        'nomor_kamar',
        'kapasitas',
        'tersedia',
    ];
    public function pasien()
    {
        return $this->hasMany(Pasien::class, 'kamar_id');
    }
}
