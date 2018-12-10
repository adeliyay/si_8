<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    protected $table = 'penjualans';
    // protected $primaryKey = 'id';
    protected $fillable = ['user_id','id_barang','nama_konsumen','deskripsi_penjualan','terjual','revenue'];
    public function barang(){
        return $this->belongsTo('App\Barang');
    }
}
