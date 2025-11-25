<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $fillable = ['fasilitas'];

    public function hotels()
    {
        return $this->belongsToMany(Hotel::class, 'fasilitashotels', 'id_fasilitas', 'id_hotel');
    }
}
