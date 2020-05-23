<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abdomen extends Model
{
    protected $fillable = [
        'distensi',
        'meteorismus',
        'peristaltic',
        'ascites',
        'nyeri_tekan',
        'lokasi'
    ];
}
