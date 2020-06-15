<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    protected $fillable =['nama_pesakit','nombor_id', 'kad_pengenalan', 'jantina', 'alamat','nombor_fon'];
    protected $dates =['created_at','updated_at'];
}
