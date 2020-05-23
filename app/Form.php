<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    public function pasien()
    {
        return $this->hasMany('App\User');
    }

    public function anamnesis()
    {
        return $this->hasOne('App\Anamnesis');
    }

    public function pemerikasaan_fisik()
    {
        return $this->hasOne('App\PemeriksaanFisik');
    }

    public function disposisi()
    {
        return $this->hasOne('App\Disposisi');
    }
}
