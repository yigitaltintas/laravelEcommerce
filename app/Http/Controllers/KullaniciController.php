<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KullaniciController extends Controller
{
    //
    public function giris_form(){
        return view(config('app.theme_path').'.kullanici.giris');
    }

    //
    public function kayit_form(){
        return view(config('app.theme_path').'.kullanici.kayit');
    }
}
