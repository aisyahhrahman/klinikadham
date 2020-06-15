<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CutiSakit extends Model
{
  protected $fillable = [
    'total_cuti', 'date_from', 'date_until'
  ];
  protected $primaryKey = 'cuti_id';

  
}
