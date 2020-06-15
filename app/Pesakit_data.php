<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesakit_data extends Model
{
    protected $fillable = [
      'nama_pesakit', 'nombor_id', 'kad_pengenalan', 'jantina', 'alamat', 'poskod', 'bandar', 'negeri', 'nombor_fon', 'email'
   ];
}
