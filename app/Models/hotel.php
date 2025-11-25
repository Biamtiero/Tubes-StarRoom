<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['nama_hotel', 'id_kota', 'bintang', 'alamat', 'foto'];

    public function kota()
    {
        return $this->belongsTo(Kota::class, 'id_kota');
    }

    public function fasilitas()
    {
        return $this->belongsToMany(Fasilitas::class, 'fasilitashotels', 'id_hotel', 'id_fasilitas');
    }

    public function kamars()
    {
        return $this->hasMany(Kamar::class, 'id_hotel');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'id_hotel');
    }
}
