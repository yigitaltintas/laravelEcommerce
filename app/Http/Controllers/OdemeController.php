<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OdemeController extends Controller
{
    //
    public function index(){
        return view(config('app.theme_path').'.odeme');
    }
}