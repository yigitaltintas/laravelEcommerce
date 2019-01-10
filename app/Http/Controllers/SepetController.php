<?php

namespace App\Http\Controllers;

use App\Models\Sepet;
use App\Models\SepetUrun;
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
        $cartItem = Cart::add($urun->id, $urun->urun_adi, request('adet'), $urun->fiyati, ['slug' => $urun->slug]);

        if(auth()->check()){

            $aktif_sepet_id = session('aktif_sepet_id');

            if(!isset($aktif_sepet_id)){

                $aktif_sepet = Sepet::create([
                    'kullanici_id' => auth()->id()
                ]);

                $aktif_sepet_id = $aktif_sepet -> id;
                session()->put('aktif_sepet_id', $aktif_sepet_id);

            }

            SepetUrun::updateOrCreate(
                ['sepet_id' => $aktif_sepet_id, 'urun_id' => $urun -> id],
                ['adet' => $cartItem->qty, 'tutar' => $cartItem->price, 'durum' => 'Beklemede']
            );

        }

        return redirect()->route('sepet')
            ->with('mesaj_tur', 'success')
            ->with('mesaj', 'Ürün sepete eklendi.');

    }

    public function kaldir($row_id){

        if(auth()->check()){

            $aktif_sepet_id = session('aktif_sepet_id');
            $cartItem = Cart::get($row_id);

            SepetUrun::where('sepet_id', $aktif_sepet_id)->where('urun_id', $cartItem->id)->delete();

        }

        Cart::remove($row_id);

        return redirect()->route('sepet')
            ->with('mesaj_tur', 'success')
            ->with('mesaj', 'Ürün sepetten kaldırıldı.');
    }

    public function bosalt(){

        if(auth()->check()){

            $aktif_sepet_id = session('aktif_sepet_id');

            SepetUrun::where('sepet_id', $aktif_sepet_id)->delete();

        }

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
