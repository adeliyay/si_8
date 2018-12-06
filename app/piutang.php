<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class piutang extends Model
{
    protected $fillable = ['user_id','asal_piutang','deskripsi_piutang','jatuh_tempo','jumlah_piutang'];
}
