<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasKursus extends Model
{
    protected $table = 'fasilitas_kursus';

    public function fasilitas()
    {
      return $this->belongsTo('App\Fasilitas');
    }
}
