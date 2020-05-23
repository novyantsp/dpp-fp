<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anamnesis extends Model
{
    protected $fillable = [
        'keluhan_utama',
        'riwayat_penyakit_sekarang',
        'riwayat_pengobatan',
    ];
}
