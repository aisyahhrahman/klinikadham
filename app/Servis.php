<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servis extends Model
{
    protected $table = 'serviss';

    protected $fillable = [
        'servis_id', 'table_id', 'penyakit_id', 'makmal_id', 'cuti_id'
    ];

    public function makmal(){
        return $this->hasMany(Makmal::class, 'makmal_id', 'makmal_id');
    }

    public function pesakit(){
        return $this->hasMany(Pesakit::class, 'table_id', 'table_id');
    }

    public function cutiSakit(){
        return $this->hasMany(CutiSakit::class, 'cuti_id', 'cuti_id');
    }

    public function jenisPenyakit(){
        return $this->hasMany(JenisPenyakit::class, 'penyakit_id', 'penyakit_id');
    }
    
}
