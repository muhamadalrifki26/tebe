<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemesananKursus extends Model
{
    protected $table = 'pemesanan_kursus';

      public function user()
      {
        return $this->belongsTo('App\User');
      }

      public function kursus()
      {
        return $this->belongsTo('App\Kursus');
      }
    }
