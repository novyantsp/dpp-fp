<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $fillable = [
        'nama',
        'sex',
        'no_rm',
        'birth',
        'usia',
        'alamat'
    ];
}
