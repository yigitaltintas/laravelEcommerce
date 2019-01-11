<?php

namespace App\Http\Controllers;

use App\Mail\KullaniciKayitMail;
use App\Models\Kullanici;
use App\Models\Sepet;
use App\Models\SepetUrun;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class KullaniciController extends Controller
{

    public function __construct(){

        $this->middleware('guest')->except('cikis');

    }

    public function giris_form(){

        return view(config('app.theme_path').'.kullanici.giris');

    }

    public function giris(){

        $this->validate(request(), [
            'email' => 'required|email' ,
            'sifre' => 'required|'
        ]);

        if(auth()->attempt(['email' => request('email'), 'password' => request('sifre')], request()->has('benihatirla') )){

            request()->session()->regenerate();

            $aktif_sepet_id = Sepet::firstOrCreate([
                'kullanici_id' => auth()->id()
            ])->id;

            session()->put('aktif_sepet_id', $aktif_sepet_id);

            if(Cart::count() > 0){
                foreach (Cart::content() as $cartItem){
                    SepetUrun::updateOrCreate(
                        ['sepet_id' => $aktif_sepet_id, 'urun_id' => $cartItem->id],
                        ['adet' => $cartItem->qty, 'tutar' => $cartItem->price, 'durum' => 'Beklemede']
                    );
                }
            }

            Cart::destroy();
            $sepetUrunler = SepetUrun::with('urun')->where('sepet_id', $aktif_sepet_id)->get();

            foreach ($sepetUrunler as $sepetUrun){
                Cart::add($sepetUrun->urun->id, $sepetUrun->urun->urun_adi, $sepetUrun->adet, $sepetUrun->urun->fiyati, ['slug' => $sepetUrun->urun->slug]);
            }

            return redirect()->intended('/');

        }else {

            $errors = ['email' => 'Kullanıcı bulunamadı.'];
            return back()->with($errors);

        }

    }

    public function cikis(){

        auth()->logout();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect()->route('anasayfa');

    }


    public function kayit_form(){
        return view(config('app.theme_path').'.kullanici.kayit');
    }

    public function kaydol(){

        $this->validate(request(), [
            'adsoyad' => 'required|min:5|max:60',
            'email' => 'required|email|unique:kullanici',
            'sifre' => 'required|confirmed|min:5|max:20'
        ]);

        $kullanici = Kullanici::create([
            'adsoyad'               => request('adsoyad'),
            'email'                 => request('email'),
            'sifre'                 => Hash::make(request('sifre')),
            'aktivasyon_anahtari'   => Str::random(60),
            'aktif_mi'              => 0
        ]);

        Mail::to(request('email'))->send(new KullaniciKayitMail($kullanici));

        auth()->login($kullanici);

        return redirect()->route('anasayfa');
    }

    public function aktiflestir($anahtar){

        $kullanici = Kullanici::where('aktivasyon_anahtari', $anahtar)->first();
        if(!is_null($kullanici)){

            $kullanici -> aktivasyon_anahtari = null;
            $kullanici -> aktif_mi = 1;
            $kullanici -> save();

            return redirect()->to('/')
                ->with('mesaj', 'Üyeliğiniz aktifleştirildi.')
                ->with('mesaj_tur', 'success');
        }else{
            return redirect()->to('/')
                ->with('mesaj', 'Geçersiz aktivasyon işlemi.')
                ->with('mesaj_tur', 'error');
        }
    }
}
