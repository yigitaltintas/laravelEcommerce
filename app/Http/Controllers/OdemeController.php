<?php

namespace App\Http\Controllers;

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

        return view(config('app.theme_path').'.odeme');
    }
}
