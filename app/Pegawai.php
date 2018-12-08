<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $fillable = ['user_id','nama_pegawai', 'bagian', 'gaji_pegawai'];
}
