@extends('theme.ecommerce.layouts.master')
@section('title', $kategori -> kategori_adi)
@section('body', 'woocommerce-active left-sidebar')

@section('content')
    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{ route('anasayfa') }}">Anasayfa</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span> {{ $kategori -> kategori_adi }}
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="shop-archive-header">
                            <div class="jumbotron">
                                <div class="jumbotron-img">
                                    <img width="416" height="283" alt="" src="assets/images/products/jumbo.jpg" class="jumbo-image alignright">
                                </div>
                                <div class="jumbotron-caption">
                                    <h3 class="jumbo-title">{{ $kategori -> kategori_adi }}</h3>
                                    <p class="jumbo-subtitle"> {{ $kategori -> aciklama }} </p>
                                </div>
                                <!-- .jumbotron-caption -->
                            </div>
                            <!-- .jumbotron -->
                        </div>
                        <!-- .shop-archive-header -->
                        <div class="shop-control-bar">
                            <div class="handheld-sidebar-toggle">
                                <button type="button" class="btn sidebar-toggler">
                                    <i class="fa fa-sliders"></i>
                                    <span>Filtreler</span>
                                </button>
                            </div>
                            <!-- .handheld-sidebar-toggle -->
                            <h1 class="woocommerce-products-header__title page-title">Ürünler</h1>
                            <ul role="tablist" class="shop-view-switcher nav nav-tabs">
                                <li class="nav-item">
                                    <a href="#grid" title="Grid View" data-toggle="tab" class="nav-link active">
                                        <i class="tm tm-grid-small"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- .shop-view-switcher -->
                            <form class="form-techmarket-wc-ppp" method="POST">
                                <input type="hidden" value="5" name="shop_columns">
                                <input type="hidden" value="15" name="shop_per_page">
                                <input type="hidden" value="right-sidebar" name="shop_layout">
                            </form>
                            <!-- .form-techmarket-wc-ppp -->
                            <form method="get" class="woocommerce-ordering">
                                <select class="orderby" name="orderby">
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option selected="selected" value="date">Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                                <input type="hidden" value="5" name="shop_columns">
                                <input type="hidden" value="15" name="shop_per_page">
                                <input type="hidden" value="right-sidebar" name="shop_layout">
                            </form>
                            <!-- .woocommerce-ordering -->
                            <nav class="techmarket-advanced-pagination">
                                <form class="form-adv-pagination" method="post">
                                    <input type="number" value="1" class="form-control" step="1" max="5" min="1" size="2" id="goto-page">
                                </form> of 5<a href="#" class="next page-numbers">→</a>
                            </nav>
                            <!-- .techmarket-advanced-pagination -->
                        </div>
                        <!-- .shop-control-bar -->
                        <div class="tab-content">
                            <div id="grid" class="tab-pane active" role="tabpanel">
                                <div class="woocommerce columns-5">
                                    <div class="products">
                                        @if(count($urunler) == 0 )
                                            Bu kategoride henuz urun bulunmamaktadir.
                                        @endif
                                        @foreach($urunler as $urun)
                                        <!-- .product -->
                                        <div class="product ">
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{ route('urun', $urun -> slug) }}">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="http://via.placeholder.com/400x400?text={{$urun-> urun_adi}}">
                                                <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol"></span>{{ $urun -> fiyati }}</span> TL
                                                        </span>
                                                <h2 class="woocommerce-loop-product__title">{{ $urun -> urun_adi }}</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="hover-area">
                                                <a class="button" href="cart.html">Sepete Ekle</a>
                                            </div>
                                            <!-- .hover-area -->
                                        </div>
                                        <!-- .product -->
                                        @endforeach

                                    </div>
                                    <!-- .products -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                        </div>
                        <!-- .tab-content -->
                        <div class="shop-control-bar-bottom">
                            <!-- .woocommerce-result-count -->
                            <nav class="woocommerce-pagination">
                                <ul class="page-numbers">
                                    <li>
                                        <span class="page-numbers current">1</span>
                                    </li>
                                    <li><a href="#" class="page-numbers">2</a></li>
                                    <li><a href="#" class="page-numbers">3</a></li>
                                    <li><a href="#" class="page-numbers">4</a></li>
                                    <li><a href="#" class="page-numbers">5</a></li>
                                    <li><a href="#" class="next page-numbers">→</a></li>
                                </ul>
                                <!-- .page-numbers -->
                            </nav>
                            <!-- .woocommerce-pagination -->
                        </div>
                        <!-- .shop-control-bar-bottom -->
                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
                <div id="secondary" class="widget-area shop-sidebar" role="complementary">
                    <div class="widget woocommerce widget_product_categories techmarket_widget_product_categories" id="techmarket_product_categories_widget-2">
                        <ul class="product-categories ">
                            <li class="product_cat">
                                <span>Alt Kategoriler</span>
                                <ul>
                                    @if(count($alt_kategoriler) == 0)
                                        Alt kategori yok
                                    @endif
                                    @foreach($alt_kategoriler as $alt_kategori)
                                    <li class="cat-item">
                                        <a href="{{ route('kategori', $alt_kategori->slug) }}">
                                            <span class="no-child"></span>{{ $alt_kategori -> kategori_adi }}</a>
                                    </li>
                                        @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div id="techmarket_products_filter-3" class="widget widget_techmarket_products_filter">
                        <span class="gamma widget-title">Filters</span>
                        <div class="widget woocommerce widget_price_filter" id="woocommerce_price_filter-2">
                            <p>
                                <span class="gamma widget-title">Filter by price</span>
                            <div class="price_slider_amount">
                                <input id="amount" type="text" placeholder="Min price" data-min="6" value="33" name="min_price" style="display: none;">
                                <button class="button" type="submit">Filter</button>
                            </div>
                            <div id="slider-range" class="price_slider"></div>
                        </div>
                        <div class="widget woocommerce widget_layered_nav maxlist-more" id="woocommerce_layered_nav-2">
                            <span class="gamma widget-title">Brands</span>
                            <ul>
                                <li class="wc-layered-nav-term ">
                                    <a href="#">apple</a>
                                    <span class="count">(2)</span>
                                </li>
                                <li class="wc-layered-nav-term "><a href="#">bosch</a>
                                    <span class="count">(1)</span>
                                </li>
                                <li class="wc-layered-nav-term "><a href="#">cannon</a>
                                    <span class="count">(1)</span>
                                </li>
                                <li class="wc-layered-nav-term "><a href="#">connect</a>
                                    <span class="count">(1)</span>
                                </li>
                                <li class="wc-layered-nav-term "><a href="#">galaxy</a>
                                    <span class="count">(3)</span>
                                </li>
                                <li class="wc-layered-nav-term "><a href="#">gopro</a>
                                    <span class="count">(1)</span>
                                </li>
                                <li class="wc-layered-nav-term "><a href="#">kinova</a>
                                    <span class="count">(1)</span>
                                </li>
                                <li class="wc-layered-nav-term "><a href="#">samsung</a>
                                    <span class="count">(1)</span>
                                </li>
                            </ul>
                        </div>
                        <!-- .woocommerce widget_layered_nav -->
                        <div class="widget woocommerce widget_layered_nav maxlist-more" id="woocommerce_layered_nav-3">
                            <span class="gamma widget-title">Color</span>
                            <ul>
                                <li class="wc-layered-nav-term "><a href="#">Black</a>
                                    <span class="count">(4)</span>
                                </li>
                                <li class="wc-layered-nav-term "><a href="#">Blue</a>
                                    <span class="count">(4)</span>
                                </li>
                                <li class="wc-layered-nav-term "><a href="#">Green</a>
                                    <span class="count">(5)</span>
                                </li>
                                <li class="wc-layered-nav-term "><a href="#">Orange</a>
                                    <span class="count">(5)</span>
                                </li>
                                <li class="wc-layered-nav-term "><a href="#">Red</a>
                                    <span class="count">(4)</span>
                                </li>
                                <li class="wc-layered-nav-term "><a href="#">Yellow</a>
                                    <span class="count">(5)</span>
                                </li>
                                <li class="wc-layered-nav-term "><a href="#">Green</a>
                                    <span class="count">(5)</span>
                                </li>
                                <li class="wc-layered-nav-term "><a href="#">Orange</a>
                                    <span class="count">(5)</span>
                                </li>
                                <li class="wc-layered-nav-term "><a href="#">Red</a>
                                    <span class="count">(4)</span>
                                </li>
                                <li class="wc-layered-nav-term "><a href="#">Yellow</a>
                                    <span class="count">(5)</span>
                                </li>
                            </ul>
                        </div>
                        <!-- .woocommerce widget_layered_nav -->
                    </div>
                    <div class="widget widget_techmarket_products_carousel_widget">
                        <section id="single-sidebar-carousel" class="section-products-carousel">
                            <header class="section-header">
                                <h2 class="section-title">Latest Products</h2>
                                <nav class="custom-slick-nav"></nav>
                            </header>
                            <!-- .section-header -->
                            <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#single-sidebar-carousel .custom-slick-nav&quot;}">
                                <div class="container-fluid">
                                    <div class="woocommerce columns-1">
                                        <div class="products">
                                            <div class="landscape-product-widget product">
                                                <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                    <div class="media">
                                                        <img class="wp-post-image" src="assets/images/products/sm-1.jpg" alt="">
                                                        <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                            <!-- .price -->
                                                            <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(0)</span>
                                                            </div>
                                                            <!-- .techmarket-product-rating -->
                                                        </div>
                                                        <!-- .media-body -->
                                                    </div>
                                                    <!-- .media -->
                                                </a>
                                                <!-- .woocommerce-LoopProduct-link -->
                                            </div>
                                            <div class="landscape-product-widget product">
                                                <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                    <div class="media">
                                                        <img class="wp-post-image" src="assets/images/products/sm-2.jpg" alt="">
                                                        <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                            <!-- .price -->
                                                            <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(0)</span>
                                                            </div>
                                                            <!-- .techmarket-product-rating -->
                                                        </div>
                                                        <!-- .media-body -->
                                                    </div>
                                                    <!-- .media -->
                                                </a>
                                                <!-- .woocommerce-LoopProduct-link -->
                                            </div>
                                            <div class="landscape-product-widget product">
                                                <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                    <div class="media">
                                                        <img class="wp-post-image" src="assets/images/products/sm-3.jpg" alt="">
                                                        <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                            <!-- .price -->
                                                            <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(0)</span>
                                                            </div>
                                                            <!-- .techmarket-product-rating -->
                                                        </div>
                                                        <!-- .media-body -->
                                                    </div>
                                                    <!-- .media -->
                                                </a>
                                                <!-- .woocommerce-LoopProduct-link -->
                                            </div>
                                            <div class="landscape-product-widget product">
                                                <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                    <div class="media">
                                                        <img class="wp-post-image" src="assets/images/products/sm-4.jpg" alt="">
                                                        <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                            <!-- .price -->
                                                            <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(0)</span>
                                                            </div>
                                                            <!-- .techmarket-product-rating -->
                                                        </div>
                                                        <!-- .media-body -->
                                                    </div>
                                                    <!-- .media -->
                                                </a>
                                                <!-- .woocommerce-LoopProduct-link -->
                                            </div>
                                        </div>
                                        <!-- .products -->
                                    </div>
                                    <!-- .woocommerce -->
                                </div>
                                <!-- .container-fluid -->
                            </div>
                            <!-- .products-carousel -->
                        </section>
                        <!-- .section-products-carousel -->
                    </div>
                    <!-- .widget_techmarket_products_carousel_widget -->
                </div>
                <!-- #secondary -->
            </div>
            <!-- .row -->
        </div>
        <!-- .col-full -->
    </div>
    <!-- #content -->
    @endsection

