<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pekerja extends Model
{
    protected $fillable = [
        'nama_pekerja', 'kad_pengenalan', 'jantina', 'alamat_pekerja', 'nombor_fon_pekerja', 'status', 'nama_pewaris', 'hubungan_pewaris', 'alamat_pewaris', 'nombor_fon_pewaris'
    ];
    protected $primaryKey = 'id';
}
