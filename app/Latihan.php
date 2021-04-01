<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Latihan extends Model
{
    protected $fillable = [
        'nis','nama','jk','tempat','tl','alamat','asal_sekolah','kelas','jurusan'
    ];
    protected $table='latihan';
}

