@extends('theme.ecommerce.layouts.master')
@section('title', 'Anasayfa')
@section('content')
    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div class="row">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="homev3-slider-with-banners row">
                            <div class="slider">
                                <div class="home-v3-slider home-slider">
                                    @foreach($urun_slider as $index => $urun_detay)
                                    <div class="slider-1">
                                        <img src="https://via.placeholder.com/600x600?text=Slider" alt="">
                                        <div class="caption">
                                            <div class="title">{{ $urun_detay-> urun -> urun_adi }}
                                                </div>
                                            <div class="sub-title">{{ $urun_detay-> urun -> aciklama }}</div>
                                            <div class="button"><a href="{{ route('urun', $urun_detay->urun -> slug) }}"> Görüntüle </a>
                                                <i class="tm tm-long-arrow-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="slider-with-6-banners column-2">
                                @foreach($gunun_firsati as $urun)
                                <div class="banner text-in-left">
                                    <a href="{{ route('urun', $urun -> slug) }}">
                                        <div style="background-size: cover; background-position: center center; background-image: url( 'https://via.placeholder.com/180x180' ); height: 165px;" class="banner-bg">
                                            <div class="caption">
                                                <div class="banner-info">
                                                    <h3 class="title">
                                                        <strong>{{ $urun -> urun_adi }}</strong>
                                                        <br> {{ $urun -> aciklama }}
                                                </div>
                                                <!-- .banner-info -->
                                                <span class="price">{{ $urun -> fiyati }} ₺</span>
                                            </div>
                                            <!-- .caption -->
                                        </div>
                                        <!-- .banner-bg -->
                                    </a>
                                </div>
                                <!-- .banner -->
                                    @endforeach

                            </div>
                            <!-- .slider-with-6-banners -->
                        </div>
                        <div class="features-list">
                            <div class="features">
                                <div class="feature">
                                    <div class="media">
                                        <i class="feature-icon d-flex mr-3 tm tm-free-delivery"></i>
                                        <div class="media-body feature-text">
                                            <h5 class="mt-0">Ücretsiz Kargo</h5>
                                            <span>50 TL ve üzeri</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- .feature -->
                                <div class="feature">
                                    <div class="media">
                                        <i class="feature-icon d-flex mr-3 tm tm-feedback"></i>
                                        <div class="media-body feature-text">
                                            <h5 class="mt-0">99% Olumlu</h5>
                                            <span>Geridönüş</span>
                                        </div>
                                    </div>
                                    <!-- .media -->
                                </div>
                                <!-- .feature -->
                                <div class="feature">
                                    <div class="media">
                                        <i class="feature-icon d-flex mr-3 tm tm-free-return"></i>
                                        <div class="media-body feature-text">
                                            <h5 class="mt-0">30 Gün</h5>
                                            <span>Koşulsuz iade</span>
                                        </div>
                                    </div>
                                    <!-- .media -->
                                </div>
                                <!-- .feature -->
                                <div class="feature">
                                    <div class="media">
                                        <i class="feature-icon d-flex mr-3 tm tm-safe-payments"></i>
                                        <div class="media-body feature-text">
                                            <h5 class="mt-0">3D Ödeme</h5>
                                            <span>Güvenli Ödeme</span>
                                        </div>
                                    </div>
                                    <!-- .media -->
                                </div>

                            </div>
                            <!-- .features -->
                        </div>
                        <!-- /.features list -->
                        <section class="section-categories-carousel" id="categories-carousel-2">
                            <header class="section-header">
                                <h2 class="section-title">Kategoriler</h2>
                                <nav class="custom-slick-nav"></nav>
                                <!-- .custom-slick-nav -->
                            </header>
                            <!-- .section-header -->
                            <div class="product-categories product-categories-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:8,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#categories-carousel-2 .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:779,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6}}]}">
                                <div class="woocommerce columns-8">
                                    <div class="products">
                                        @foreach($kategoriler as $kategori)
                                        <div class="product-category product">
                                            <a href="{{ route('kategori', $kategori -> slug) }}">
                                                <img width="300" height="300" alt="{{ $kategori -> kategori_adi  }}" src="https://via.placeholder.com/180x180">
                                                <h2 class="woocommerce-loop-category__title"> {{ $kategori -> kategori_adi  }} </h2>
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>
                                    <!-- .products-->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                        </section>
                        <!-- .section-top-categories -->
                        <div class="fullwidth-notice stretch-full-width">
                            <div class="col-full">
                                <p class="message">Download our new app today! Dont miss our mobile-only offers and shop with Android Play.</p>
                            </div>
                            <!-- .col-full -->
                        </div>
                        <!-- .fullwidth-notice -->
                        <section class="section-products-carousel new-arrival-carousel" id="section-products-carousel-7">
                            <header class="section-header">
                                <h2 class="section-title">Çok Satan</h2>
                                <nav class="custom-slick-nav"></nav>
                            </header>
                            <!-- .section-header -->
                            <div class="products-carousel 7-column-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#section-products-carousel-7 .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:779,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1600,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                <div class="container-fluid">
                                    <div class="woocommerce columns-7">
                                        <div class="products">
                                            @foreach($cok_satan as $urun)
                                            <div class="product">
                                                <div class="yith-wcwl-add-to-wishlist">
                                                    <a href="{{ route('urun', $urun -> urun -> slug) }}" rel="nofollow" class="add_to_wishlist"> Favorilere Ekle </a>
                                                </div>
                                                <a href="{{ route('urun', $urun -> urun -> slug) }}" class="woocommerce-LoopProduct-link">
                                                    <img src="https://via.placeholder.com/180x180" width="224" height="197" class="wp-post-image" alt="">
                                                    <span class="price">
                                                                <ins>
                                                                    <span class="amount"> </span>
                                                                </ins>
                                                                <span class="amount"> {{ $urun -> urun -> fiyati }} ₺</span>
                                                            </span>
                                                    <!-- /.price -->
                                                    <h2 class="woocommerce-loop-product__title">{{ $urun -> urun -> urun_adi }}</h2>
                                                </a>
                                                <div class="hover-area">
                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Sepete Ekle</a>
                                                </div>
                                            </div>
                                            @endforeach
                                            <!-- /.product-outer -->
                                        </div>
                                    </div>
                                    <!-- .woocommerce -->
                                </div>
                                <!-- .row -->
                            </div>
                            <!-- .products-carousel -->
                        </section>
                        <!-- .section-products-carousel -->
                        <section class="stretch-full-width section-products-carousel-with-bg 7-column-carousel-bg">
                            <div class="col-full">
                                <div class="row">
                                    <header class="section-header">
                                        <h2 class="section-title">Öne Çıkanlar
                                        </h2>
                                        <img alt="" src="assets/images/products/bg-2.png">
                                    </header>
                                    <div class="products-carousel-with-bg">
                                        <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1201,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6}}]}">
                                            <div class="container-fluid">
                                                <div class="woocommerce columns-6">
                                                    <div class="products">
                                                        @foreach($one_cikanlar  as $urun)
                                                        <div class="product">
                                                            <a href="{{ route('urun', $urun -> urun -> slug) }}" class="woocommerce-LoopProduct-link">
                                                                <img src="https://via.placeholder.com/180x180" width="224" height="197" class="wp-post-image" alt="">
                                                                <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> {{ $urun -> urun -> fiyati }} ₺</span>
                                                                        </span>
                                                                <!-- /.price -->
                                                                <h2 class="woocommerce-loop-product__title">{{ $urun -> urun -> urun_adi }}</h2>
                                                            </a>
                                                            <div class="hover-area">
                                                                <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Sepete Ekle</a>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        <!-- /.product-outer -->
                                                    </div>
                                                </div>
                                                <!-- .woocommerce-->
                                            </div>
                                            <!-- .container-fluid -->
                                        </div>
                                        <!-- .products-carousel -->
                                    </div>
                                    <!-- .products-carousel-with-bg -->
                                </div>
                                <!-- .row -->
                            </div>
                            <!-- .col-full -->
                        </section>
                        <!-- .section-products-carousel-with-bg -->

                        <div class="home-v3-banner-with-products-carousel row">
                            <div class="banner column-1">
                                <a href="#">
                                    <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/home-v3-banner.jpg ); height: 321px;" class="banner-bg">
                                        <div class="caption">
                                            <div class="banner-info">
                                                <h3 class="title">İndirimli
                                                    <strong>Ürünler</strong>
                                                </h3>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- .banner -->
                            <section class="section-products-carousel column-2">
                                <div class="products-carousel carousel-without-attributes" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                    <div class="container-fluid">
                                        <div class="woocommerce columns-7">
                                            <div class="products">
                                                @foreach($indirimli as $urun)
                                                <div class="product">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <a href="#" rel="nofollow" class="add_to_wishlist"> Favorilere Ekle</a>
                                                    </div>
                                                    <a href="{{ route('urun', $urun-> urun-> slug) }}" class="woocommerce-LoopProduct-link">
                                                                <span class="onsale">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol"></span>{{ ($urun->urun->fiyati/100)*20 }}</span>₺
                                                                </span>
                                                        <img src="https://via.placeholder.com/180x180" width="224" height="197" class="wp-post-image" alt="">
                                                        <span class="price">
                                                                    <ins>
                                                                        <span class="amount"> {{ $urun->urun->fiyati }} ₺</span>
                                                                    </ins>
                                                                    <del>
                                                                        <span class="amount">{{ $urun->urun->fiyati + ($urun->urun->fiyati/100)*20  }} ₺</span>
                                                                    </del>
                                                                    <span class="amount"> </span>
                                                                </span>
                                                        <!-- /.price -->
                                                        <h2 class="woocommerce-loop-product__title">{{ $urun-> urun-> urun_adi }}</h2>
                                                    </a>
                                                    <div class="hover-area">
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Sepete Ekle</a>
                                                    </div>
                                                </div>
                                                <!-- /.product-outer -->
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- .woocommerce -->
                                    </div>
                                    <!-- .container-fluid -->
                                </div>
                                <!-- .products-carousel -->
                            </section>
                            <!-- .section-products-carousel -->
                        </div>
                        <!-- .home-v3-banner-with-products-carousel -->
                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
            </div>
            <!-- .row -->
        </div>
        <!-- .col-full -->
    </div>
    <!-- #content -->
    @endsection