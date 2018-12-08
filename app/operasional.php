<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class operasional extends Model
{
    protected $fillable = ['nama_pegawai', 'bagian', 'gaji_pegawai'];
}
