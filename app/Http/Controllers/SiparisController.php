<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiparisController extends Controller
{
    //
    public function index(){
        return view(config('app.theme_path').'.siparisler');
    }

    public function detay($id){
        return view(config('app.theme_path').'.siparis');
    }
}
