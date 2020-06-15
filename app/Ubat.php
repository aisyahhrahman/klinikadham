<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubat extends Model
{
    protected $fillable = [
        'ubat_id','description', 'harga', 
    ];
    protected $primaryKey = 'ubat_id';
}
