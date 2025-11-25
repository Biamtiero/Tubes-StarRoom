<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['id_hotel', 'id_user', 'rating', 'ulasan'];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'id_hotel');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
