<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extrimitas extends Model
{
    protected $fillable = [
        'suhu',
        'edema',
        'lain_lain'
    ];
}
