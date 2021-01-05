<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    
    //
    public function Pesanan_detail(){
        return $this -> hasMany('App\Pesanan_detail','barang_id','id');
    }
}
