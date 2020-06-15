<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'ubat_id', 'kuantiti','price','batch_no', 'invoice','tarikh', 'mal_no', 'expiry_date'
    ];
    protected $primaryKey = 'stock_id';
}
