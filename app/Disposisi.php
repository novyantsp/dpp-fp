<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    protected $fillable = [
        'boleh_pulang',
        'tgl_boleh_pulang',
        'kontrol_klinik',
        'keterangan_kontrol',
        'tgl_kontrol_klinik',
        'dirawat_di_ruang',
        'keterangan_rawat'
    ];
}
