<h1> {{ config('app.name') }}</h1>
<p> Merhaba {{ $kullanici->adsoyad }} ,</p>
<p> Kaydınız başarıyla gerçekleşmiştir. </p>

<p>Kaydınızı aktif edebilmeniz için lütfen bu linke <a href="{{ config('app.url') }}/kullanici/aktiflestir/{{ $kullanici-> aktivasyon_anahtari }}">tıklayın</a>  ve ya aşağıdaki bağlantıyı tarayıcınızda açınız.</p>

<a href="{{ config('app.url') }}/kullanici/aktiflestir/{{ $kullanici-> aktivasyon_anahtari }}">{{ config('app.url') }}/kullanici/aktiflestir/{{ $kullanici-> aktivasyon_anahtari }}</a>