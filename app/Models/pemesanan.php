<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $fillable = [
        'id_user',
        'id_kamar',
        'jumlah_kamar',
        'tanggal_checkin',
        'tanggal_checkout',
        'total_harga',
        'status',
        'metode_pembayaran'
    ];

    protected $casts = [
        'tanggal_checkin' => 'date',
        'tanggal_checkout' => 'date'
    ];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'id_kamar');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
