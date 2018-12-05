<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    protected $fillable = ['nama','distributor','deskripsi','jumlah','beli','jual'];
}
