<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasTempat extends Model
{
    protected $table = 'fasilitas_tempat';

    public function fasilitas()
    {
      return $this->belongsTo('App\Fasilitas');
    }
}
