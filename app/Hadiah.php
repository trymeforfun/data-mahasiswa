<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hadiah extends Model
{
    protected $table = 'hadiah';

    public function mahasiswa()
    {
        return $this->belongsToMany('App\mahasiswa');
    }
}
