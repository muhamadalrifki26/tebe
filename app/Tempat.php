<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tempat extends Model
{
    protected $table = 'tempat';

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function pemesanan_tempat()
    {
      return $this->hasMany('App\PemesananTempat');
    }
    public function fasilitas_tempat()
    {
      return $this->hasMany('App\FasilitasTempat');
    }
}
