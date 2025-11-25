<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FasilitasHotel extends Model
{
    protected $table = 'fasilitashotels';

    protected $fillable = ['id_hotel', 'id_fasilitas'];
}
