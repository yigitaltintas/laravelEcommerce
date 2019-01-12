@extends('theme.ecommerce.layouts.master')
@section('title', 'Sepet')

@section('content')
    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="home-v1.html">Anasayfa</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>
                    Cart
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="type-page hentry">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <div class="cart-wrapper">

                                        @include('theme.ecommerce.layouts.partials.alert')

                                        @if(count(Cart::content()) > 0)
                                            <form method="post" action="#" class="woocommerce-cart-form">
                                                <table class="shop_table shop_table_responsive cart">
                                                    <thead>
                                                    <tr>
                                                        <th class="product-remove">&nbsp;</th>
                                                        <th class="product-thumbnail">&nbsp;</th>
                                                        <th class="product-name">Ürün Adı</th>
                                                        <th class="product-price">Fiyat</th>
                                                        <th class="product-quantity">Adet</th>
                                                        <th class="product-subtotal">Toplam</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach(Cart::content() as $urunCartItem)
                                                        <tr>
                                                            <td class="product-remove">
                                                                <form action="{{ route('sepet.kaldir', $urunCartItem->rowId) }}" method="post">
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('DELETE') }}
                                                                    <button class="remove" type="submit">×</button>
                                                                </form>

                                                            </td>
                                                            <td class="product-thumbnail">
                                                                <a href="">
                                                                    <img width="180" height="180" alt="" class="wp-post-image" src="https://via.placeholder.com/180x180">
                                                                </a>
                                                            </td>
                                                            <td data-title="Product" class="product-name">
                                                                <div class="media cart-item-product-detail">
                                                                    <a href="{{ route('urun', $urunCartItem->options->slug) }}">
                                                                        <img width="180" height="180" alt="" class="wp-post-image" src="https://via.placeholder.com/180x180">
                                                                    </a>
                                                                    <div class="media-body align-self-center">
                                                                        <a href="{{route('urun', $urunCartItem->options->slug)}}">{{ $urunCartItem -> name }}</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td data-title="Price" class="product-price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        {{ $urunCartItem -> price }}<span class="woocommerce-Price-currencySymbol">₺</span>
                                                                    </span>
                                                            </td>
                                                            <td class="product-quantity" data-title="Quantity">
                                                                <div class="quantity">
                                                                    <label for="quantity-input-1">Adet</label>
                                                                    <input id="urun-adet" type="number" value="{{ $urunCartItem -> qty }}" class="input-text qty text" min="1" max="100" data-id="{{ $urunCartItem->rowId }}">
                                                                </div>
                                                            </td>
                                                            <td data-title="Total" class="product-subtotal">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        {{ $urunCartItem -> subtotal }}<span class="woocommerce-Price-currencySymbol">₺</span>
                                                                    </span>
                                                                <form action="{{ route('sepet.kaldir', $urunCartItem->rowId) }}" method="POST">
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('DELETE') }}
                                                                    <button type="submit" class="remove">×</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                                <!-- .shop_table shop_table_responsive -->
                                            </form>
                                            <!-- .woocommerce-cart-form -->
                                            <div class="cart-collaterals">
                                                <div class="cart_totals">

                                                    <h2>Sepet Toplamı</h2>
                                                    <table class="shop_table shop_table_responsive">
                                                        <tbody>
                                                        <tr class="cart-subtotal">
                                                            <th>Ara Toplam</th>
                                                            <td data-title="Subtotal">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                        {{ Cart::subtotal() }}    <span class="woocommerce-Price-currencySymbol">₺</span>
                                                                        </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="cart-subtotal">
                                                            <th>KDV</th>
                                                            <td data-title="Subtotal">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                        {{ Cart::tax() }}    <span class="woocommerce-Price-currencySymbol">₺</span>
                                                                        </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="shipping">
                                                            <th>Kargo</th>
                                                            <td data-title="Shipping">MNG Kargo</td>
                                                        </tr>
                                                        <tr class="order-total">
                                                            <th>Toplam</th>
                                                            <td data-title="Total">
                                                                <strong>
                                                                            <span class="woocommerce-Price-amount amount">
                                                                            {{ Cart::total() }}    <span class="woocommerce-Price-currencySymbol">₺</span>
                                                                            </span>
                                                                </strong>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- .shop_table shop_table_responsive -->
                                                    <div class="wc-proceed-to-checkout">
                                                        <a class="checkout-button button alt wc-forward" href="{{ route('odeme') }}">
                                                            Alışverişi Tamamla</a>
                                                        <form action="{{ route('sepet.bosalt') }}" method="POST">
                                                            {{ csrf_field() }}
                                                            {{method_field('DELETE')}}
                                                            <span class="center-block">
                                                                <button class="checkout-button button alt">Sepeti Boşalt</button>
                                                            </span>
                                                        </form>
                                                    </div>
                                                    <!-- .wc-proceed-to-checkout -->
                                                </div>
                                                <!-- .cart_totals -->
                                            </div>
                                            <!-- .cart-collaterals -->
                                        @else
                                            <h2>Sepetinizde ürün bulunamadı.</h2>
                                        @endif
                                    </div>
                                    <!-- .cart-wrapper -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .entry-content -->
                        </div>
                        <!-- .hentry -->
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
    <div class="col-full">
        <section class="brands-carousel">
            <h2 class="sr-only">Brands Carousel</h2>
            <div class="col-full" data-ride="tm-slick-carousel" data-wrap=".brands" data-slick="{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;responsive&quot;:[{&quot;breakpoint&quot;:400,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                <div class="brands">
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <figcaption class="text-overlay">
                                    <div class="info">
                                        <h4>apple</h4>
                                    </div>
                                    <!-- /.info -->
                                </figcaption>
                                <img width="145" height="50" class="img-responsive desaturate" alt="apple" src="assets/images/brands/1.png">
                            </figure>
                        </a>
                    </div>
                    <!-- .item -->
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <figcaption class="text-overlay">
                                    <div class="info">
                                        <h4>bosch</h4>
                                    </div>
                                    <!-- /.info -->
                                </figcaption>
                                <img width="145" height="50" class="img-responsive desaturate" alt="bosch" src="assets/images/brands/2.png">
                            </figure>
                        </a>
                    </div>
                    <!-- .item -->
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <figcaption class="text-overlay">
                                    <div class="info">
                                        <h4>cannon</h4>
                                    </div>
                                    <!-- /.info -->
                                </figcaption>
                                <img width="145" height="50" class="img-responsive desaturate" alt="cannon" src="assets/images/brands/3.png">
                            </figure>
                        </a>
                    </div>
                    <!-- .item -->
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <figcaption class="text-overlay">
                                    <div class="info">
                                        <h4>connect</h4>
                                    </div>
                                    <!-- /.info -->
                                </figcaption>
                                <img width="145" height="50" class="img-responsive desaturate" alt="connect" src="assets/images/brands/4.png">
                            </figure>
                        </a>
                    </div>
                    <!-- .item -->
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <figcaption class="text-overlay">
                                    <div class="info">
                                        <h4>galaxy</h4>
                                    </div>
                                    <!-- /.info -->
                                </figcaption>
                                <img width="145" height="50" class="img-responsive desaturate" alt="galaxy" src="assets/images/brands/5.png">
                            </figure>
                        </a>
                    </div>
                    <!-- .item -->
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <figcaption class="text-overlay">
                                    <div class="info">
                                        <h4>gopro</h4>
                                    </div>
                                    <!-- /.info -->
                                </figcaption>
                                <img width="145" height="50" class="img-responsive desaturate" alt="gopro" src="assets/images/brands/6.png">
                            </figure>
                        </a>
                    </div>
                    <!-- .item -->
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <figcaption class="text-overlay">
                                    <div class="info">
                                        <h4>handspot</h4>
                                    </div>
                                    <!-- /.info -->
                                </figcaption>
                                <img width="145" height="50" class="img-responsive desaturate" alt="handspot" src="assets/images/brands/7.png">
                            </figure>
                        </a>
                    </div>
                    <!-- .item -->
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <figcaption class="text-overlay">
                                    <div class="info">
                                        <h4>kinova</h4>
                                    </div>
                                    <!-- /.info -->
                                </figcaption>
                                <img width="145" height="50" class="img-responsive desaturate" alt="kinova" src="assets/images/brands/8.png">
                            </figure>
                        </a>
                    </div>
                    <!-- .item -->
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <figcaption class="text-overlay">
                                    <div class="info">
                                        <h4>nespresso</h4>
                                    </div>
                                    <!-- /.info -->
                                </figcaption>
                                <img width="145" height="50" class="img-responsive desaturate" alt="nespresso" src="assets/images/brands/9.png">
                            </figure>
                        </a>
                    </div>
                    <!-- .item -->
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <figcaption class="text-overlay">
                                    <div class="info">
                                        <h4>samsung</h4>
                                    </div>
                                    <!-- /.info -->
                                </figcaption>
                                <img width="145" height="50" class="img-responsive desaturate" alt="samsung" src="assets/images/brands/10.png">
                            </figure>
                        </a>
                    </div>
                    <!-- .item -->
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <figcaption class="text-overlay">
                                    <div class="info">
                                        <h4>speedway</h4>
                                    </div>
                                    <!-- /.info -->
                                </figcaption>
                                <img width="145" height="50" class="img-responsive desaturate" alt="speedway" src="assets/images/brands/11.png">
                            </figure>
                        </a>
                    </div>
                    <!-- .item -->
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <figcaption class="text-overlay">
                                    <div class="info">
                                        <h4>yoko</h4>
                                    </div>
                                    <!-- /.info -->
                                </figcaption>
                                <img width="145" height="50" class="img-responsive desaturate" alt="yoko" src="assets/images/brands/12.png">
                            </figure>
                        </a>
                    </div>
                    <!-- .item -->
                </div>
            </div>
            <!-- .col-full -->
        </section>
        <!-- .brands-carousel -->
    </div>
    <!-- .col-full -->
@endsection
