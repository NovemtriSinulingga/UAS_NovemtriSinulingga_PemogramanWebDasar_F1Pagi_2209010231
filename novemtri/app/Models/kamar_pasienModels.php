<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar_pasien extends Model
{
    protected $fillable = [
        'kamar_id',
        'pasien_id',
        'tanggal_masuk',
        'tanggal_keluar',
    ];
    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'kamar_id');
    }

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'pasien_id');
    }
}
