<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    protected $fillable = [
        'nama',
        'kama_id',
    ];
    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'kamar_id');
    }
}
