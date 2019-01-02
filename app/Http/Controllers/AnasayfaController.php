<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class AnasayfaController extends Controller
{

    public function index(){
        $kategoriler = Kategori::whereRaw('ust_id is null')-> take(6)->get();
        return view(config('app.theme_path').'.anasayfa', compact('kategoriler'));
    }
}
