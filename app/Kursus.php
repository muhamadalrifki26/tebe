<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    protected $table = 'kursus';

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function pemesanan_kursus()
    {
      return $this->hasMany('App\PemesananKursus');
    }

    public function fasilitas_kursus()
    {
      return $this->hasMany('App\FasilitasKursus');
    }
}
