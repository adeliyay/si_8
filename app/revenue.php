<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class revenue extends Model
{
    protected $fillable = ['user_id','id_barang','nama_barang','keuntungan'];    
    public function barang(){
        return $this->belongsTo('App\Barang');
    }
        // protected static function boot() {
        //     parent::boot();
        
        //     static::saving(function($model){
        //         $model->keuntungan = $model->jual - $model->beli;
        //     }); 
        // }
}
