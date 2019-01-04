<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Urun;
use App\Models\UrunDetay;
use Illuminate\Http\Request;

class AnasayfaController extends Controller
{

    public function index(){
        $kategoriler = Kategori::whereRaw('ust_id is null')-> take(6)->get();

        $urun_slider = UrunDetay::with('urun')->where('goster_slider', 1)->take(3)->get();

        $indirimli = UrunDetay::with('urun')->where('goster_indirimli', 1)->take(8)->get();

        $one_cikanlar = UrunDetay::with('urun')->where('goster_one_cikan', 1)->take(8)->get();

        $cok_satan = UrunDetay::with('urun')->where('goster_cok_satan', 1)->take(8)->get();

        $gunun_firsati = Urun::select('urun.*')
            ->join('urun_detay', 'urun_detay.urun_id', 'urun_id')
            ->where('urun_detay.goster_gunun_firsati', 1)
            ->orderBy('guncellenme_tarihi', 'desc')
            ->take(6)
            ->get();

        return view(config('app.theme_path').'.anasayfa', compact('kategoriler', 'urun_slider', 'gunun_firsati', 'indirimli', 'cok_satan', 'one_cikanlar'));
    }
}
