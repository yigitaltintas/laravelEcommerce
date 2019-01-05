<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //
    public function index($slug_kategoriadi){
        $kategori = Kategori::where('slug', $slug_kategoriadi)->firstOrFail();
        $alt_kategoriler = Kategori::where('ust_id', $kategori -> id)->get();

        $order= request('order');
        if($order == 'pahali'){

            $urunler = $kategori->urunler()
                ->distinct()
                ->orderByDesc('fiyati')
                ->paginate(12);

        }elseif($order == 'ucuz'){

            $urunler = $kategori->urunler()
                ->distinct()
                ->orderBy('fiyati')
                ->paginate(12);

        }else{

            $urunler = $kategori->urunler()->paginate(12);

        }

        return view(config('app.theme_path').'.kategori', compact('kategori', 'alt_kategoriler', 'urunler'));
    }
}
