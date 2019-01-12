<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KullaniciDetay extends Model
{

    protected $table = 'kullanici_detay';
    protected $timestamp = false;
    protected $guarded = [];

    public function kullanici(){
        return $this->belongsTo('App\Models\Kullanici');
    }

}
