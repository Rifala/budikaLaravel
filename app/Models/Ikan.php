<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Ikan extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ikan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_ikan',
        'luas_lahan_id',
        'berat_ideal_id',
        'jenis_perairan_id',
        'jenis_air_id',
        'masa_panen_id',
        'deskripsi',
        'created_at',
        'updated_at'
    ];
}
