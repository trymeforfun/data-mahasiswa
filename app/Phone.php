<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phone';

    public function mahasiswa()
    {
        return $this->belongsTo('App\Mahasiswa');
    }
}
