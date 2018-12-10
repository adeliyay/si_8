<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'Barangs';
    protected $fillable = ['user_id','nama','distributor','deskripsi','jumlah','beli','jual','keuntungan'];
    public function penjualan(){
        return $this->hasMany('App\penjualan');
    }
    public function Keuntungan(){
        return $this->hasOne('App\revenue');
    }
    // public function test(){
    // return $this->belongsTo(User::class, 'user_id');
    // }
    // protected static function boot() {
    //     parent::boot();
    
    //     static::saving(function($model){
    //         $model->keuntungan = $model->jual - $model->beli;
    //     }); 
    // }
}
