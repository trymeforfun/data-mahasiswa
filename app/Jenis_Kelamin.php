<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis_Kelamin extends Model
{
    protected $table = 'Jenis_Kelamin';

    public function mahasiswa()
    {
        return $this->belongsTo('App\mahasiswa');
    }
}
