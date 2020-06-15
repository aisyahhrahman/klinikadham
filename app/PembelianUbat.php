<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PembelianUbat extends Model
{
    protected $table = 'pembelian_ubats';

    protected $fillable = [
        'pesakit_id', 'description', 'kuantiti_pembelian', 'ubat', 'tarikh'
    ];
    
}
