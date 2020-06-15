<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesakit extends Model
{

   protected $fillable = [
      'nama_pesakit', 'nombor_id', 'status', 'kad_pengenalan', 'jantina', 'alamat', 'nombor_fon', 'email'
   ];
   protected $primaryKey = 'table_id';

}
