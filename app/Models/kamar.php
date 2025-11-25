<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $fillable = [
        'id_hotel',
        'tipe_kamar',
        'kapasitas',
        'harga',
        'stok'
    ];

    protected $casts = [
        'tipe_kamar' => 'string'
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'id_hotel');
    }

    public function pemesanans()
    {
        return $this->hasMany(Pemesanan::class, 'id_kamar');
    }
}
