<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemesananTempat extends Model
{
  protected $table = 'pemesanan_tempat';

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function tempat()
  {
    return $this->belongsTo('App\Tempat');
  }
}
