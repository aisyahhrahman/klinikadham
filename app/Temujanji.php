<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temujanji extends Model
{
    protected $fillable = [
        'temujanji_id', 'kad_pengenalan', 'keterangan', 'tarikh', 'masa', 'table_id' 
    ];
}
