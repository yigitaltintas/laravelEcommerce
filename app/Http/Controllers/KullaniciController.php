<?php

namespace App\Http\Controllers;

use App\Models\Kullanici;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KullaniciController extends Controller
{
    //
    public function giris_form(){
        return view(config('app.theme_path').'.kullanici.giris');
    }

    public function giris(){

    }

    //
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

        auth()->login($kullanici);

        return redirect()->route('anasayfa');
    }
}
