<?php

namespace App\Http\Controllers;

use App\Models\Siparis;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;


class OdemeController extends Controller
{
    //
    public function index(){

        if(!auth()->check()){

            return redirect()->route('kullanici.giris')
                ->with('mesaj_tur','info')
                ->with('mesaj', 'Ödeme işlemi yapabilmeniz için oturum açmalısınız. Üye değilseniz lütfen üye olunuz.');

        }elseif ( count( Cart::content() )==0 ){

            return redirect()->route('anasayfa')
                ->with('mesaj_tur','info')
                ->with('mesaj', 'Ödeme işlemi yapabilmeniz için sepetinizde en az bir ürün olmalıdır.');

        }

        $kullanici_detay = auth()-> user()-> detay;

        return view(config('app.theme_path').'.odeme', compact('kullanici_detay'));
    }

    public function  odemeyap(){

        $siparis = request() -> all();
        $siparis['sepet_id'] = session('aktif_sepet_id');
        $siparis['banka'] = "Garanti";
        $siparis['taksitsayisi'] = 1;
        $siparis['durum'] = "Siparişiniz alındı.";
        $siparis['siparis_tutari'] = Cart::subtotal();

        Siparis::create($siparis);
        Cart::destroy();
        session()-> forget('aktif_sepet_id');

        return redirect()->route('siparisler')
            ->with('mesaj_tur', 'success')
            ->with('mesaj', 'Ödemeniz başarıyla tamamlandı');
    }
}
