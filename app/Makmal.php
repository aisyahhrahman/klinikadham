<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makmal extends Model
{
  protected $fillable = [
    'makmal_name', 'harga_makmal'
  ];
  protected $primaryKey = 'makmal_id';

  
}
