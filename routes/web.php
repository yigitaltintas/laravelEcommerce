<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'AnasayfaController@index')->name('anasayfa');

Route::get('/kategori/{slug_kategoriadi}', 'KategoriController@index')->name('kategori');

Route::get('/urun/{slug_urunadi}', 'UrunController@index')->name('urun');

Route::post('/ara', 'UrunController@ara')->name('urun-ara');

Route::get('/ara', 'UrunController@ara')->name('urun-ara');

/* Auth */
Route::group(['middleware' => 'auth'], function (){

    Route::get('/odeme', 'OdemeController@index')->name('odeme');

    Route::get('/siparisler', 'SiparisController@index')->name('siparisler');

    Route::get('/siparisler/{id}', 'SiparisController@detay')->name('siparis');
});

Route::group(['prefix' => '/sepet'], function(){

    Route::get('/', 'SepetController@index')->name('sepet');

    Route::post('/ekle', 'SepetController@ekle')->name('sepet.ekle');

    Route::delete('/kaldir/{row_id}', 'SepetController@kaldir')->name('sepet.kaldir');

    Route::delete('/bosalt', 'SepetController@bosalt')->name('sepet.bosalt');

    Route::patch('/guncelle/{row_id}', 'SepetController@guncelle')->name('sepet.guncelle');

});

Route::group(['prefix' => 'kullanici'], function(){

    Route::get('/giris', 'KullaniciController@giris_form')->name('kullanici.giris');

    Route::post('/giris', 'KullaniciController@giris');

    Route::get('/kayit', 'KullaniciController@kayit_form')->name('kullanici.kayit');

    Route::post('/kayit', 'KullaniciController@kaydol');

    Route::get('/aktiflestir/{anahtar}', 'KullaniciController@aktiflestir')->name('aktiflestir');

    Route::post('/cikis', 'KullaniciController@cikis')->name('kullanici.cikis');
});


Route::get('/test/mail', function (){
    $kullanici = \App\Models\Kullanici::find(1);
    return new App\Mail\KullaniciKayitMail($kullanici);
});