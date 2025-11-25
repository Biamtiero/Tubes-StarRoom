<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Kolom yang bisa diisi (fillable).
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Kolom yang tidak boleh ditampilkan (hidden).
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Casting otomatis.
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Relasi ke pemesanan
     * 1 user banyak booking.
     */
    public function pemesanans()
    {
        return $this->hasMany(Pemesanan::class);
    }
}
