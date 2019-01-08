<?php

namespace App\Http\Controllers;

use App\Models\Urun;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class SepetController extends Controller
{
    //
    public function index(){
        return view(config('app.theme_path').'.sepet');
    }

    public function ekle(){

        $urun = Urun::find(request('id'));
        Cart::add($urun->id, $urun->urun_adi, request('adet'), $urun->fiyati, ['slug' => $urun->slug]);

        return redirect()->route('sepet')
            ->with('mesaj_tur', 'success')
            ->with('mesaj', 'Ürün sepete eklendi.');

    }

    public function kaldir($row_id){
        Cart::remove($row_id);
        return redirect()->route('sepet')
            ->with('mesaj_tur', 'success')
            ->with('mesaj', 'Ürün sepetten kaldırıldı.');
    }
}
