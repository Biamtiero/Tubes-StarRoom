<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasHotel extends Model
{
    /** @use HasFactory<\Database\Factories\FasilitasHotelFactory> */
    use HasFactory;
    protected $guarded = ['id'];

    function fasilitas()
    {
        return $this->belongsTo(Fasilitas::class);
    }
}
