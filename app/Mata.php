<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mata extends Model
{
    protected $fillable = [
        'anemia',
        'ikterus',
        'reflek_pupil',
        'edema_palpebrae'
    ];
}
