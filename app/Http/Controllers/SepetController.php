<?php

namespace App\Http\Controllers;

use App\Models\Urun;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function bosalt(){
        Cart::destroy();
        return redirect()->route('sepet')
            ->with('mesaj_tur', 'success')
            ->with('mesaj', 'Sepetinizi boşaltıldı.');
    }

    public function guncelle($row_id){

        $validator = Validator::make(request()->all(), [
           'adet' => 'required|numeric|between:1,10'
        ]);

        if ($validator -> fails()){

            session()->flash('mesaj_tur', 'danger');
            session()->flash('mesaj', 'Adet bilgisi 1 ile 10 arasında olmalıdır.');
            return response()->json(['success'=>false]);

        }

        Cart::update($row_id, request('adet'));

        session()->flash('mesaj_tur', 'success');
        session()->flash('mesaj', 'Adet bilgisi güncellendi.');
        return response()->json(['success'=>true]);
    }
}
