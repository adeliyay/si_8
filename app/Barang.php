<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['user_id','nama','distributor','deskripsi','jumlah','beli','jual'];
}
