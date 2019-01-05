<?php

namespace App\Http\Controllers;

use App\Models\Urun;
use Illuminate\Http\Request;

class UrunController extends Controller
{
    //
    public function index($slug_urunadi){
        $urun = Urun::whereSlug($slug_urunadi)->firstOrFail();
        $kategoriler = $urun->kategoriler()->distinct()->get();
        return view(config('app.theme_path').'.urun', compact('urun', 'kategoriler'));
    }

    public function ara(){
        $s = request()->input('search');
        $urunler = Urun::where('urun_adi', 'like', "%$s%")->paginate(12);
        request()->flash();
        return view(config('app.theme_path').'.arama', compact('urunler' ));
    }
}
