<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pembudidaya extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pembudidaya';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'jk',
        'no_hp',
        'email',
        'tanggal',
        'luas_lahan_id',
        'berat_ideal_id',
        'jenis_perairan_id',
        'jenis_air_id',
        'masa_panen_id'
    ];
}
