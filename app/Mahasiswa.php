<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nama', 'nim', 'email'];
    public $timestamps = false;

    public function phone()
    {
        return $this->hasOne('App\phone');
    }

    public function jenis_kelamin()
    {
        return $this->hasMany('App\Jenis_Kelamin');
    }

    public function hadiah()
    {
        return $this->belongsToMany('App\hadiah');
    }
}
