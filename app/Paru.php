<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paru extends Model
{
    protected $fillable = [
        'suara_nafas',
        'ronki',
        'wheezing',
        'lain_lain'
    ];
}
