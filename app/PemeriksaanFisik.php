<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemeriksaanFisik extends Model
{
    protected $fillable = [
        'hepar',
        'lien',
        'lain_lain'
    ];

    public function mata()
    {
        return $this->hasOne('App\Mata');
    }

    public function tht()
    {
        return $this->hasOne('App\Tht');
    }

    public function leher()
    {
        return $this->hasOne('App\Leher');
    }

    public function torak()
    {
        return $this->hasOne('App\Torak');
    }

    public function jantung()
    {
        return $this->hasOne('App\Jantung');
    }

    public function paru()
    {
        return $this->hasOne('App\Paru');
    }

    public function abdomen()
    {
        return $this->hasOne('App\Abdomen');
    }

    public function ekstrimitas()
    {
        return $this->hasOne('App\Ekstrimitas');
    }

}
