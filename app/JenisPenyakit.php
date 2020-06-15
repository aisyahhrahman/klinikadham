<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisPenyakit extends Model
{
  protected $table = 'jenis_penyakits';

  protected $fillable = [
    'jenis_penyakit', 'catatan'
  ];
  protected $primaryKey = 'penyakit_id';

  
}
