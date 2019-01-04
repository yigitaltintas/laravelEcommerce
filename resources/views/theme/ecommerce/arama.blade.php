@extends('theme.ecommerce.layouts.master')
@section('title', 'Arama')
@section('body', 'woocommerce-active full-width')
@section('content')
    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{ route('anasayfa') }}">Anasayfa</a>
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="shop-control-bar">
                            <div class="handheld-sidebar-toggle">
                                <button type="button" class="btn sidebar-toggler">
                                    <i class="fa fa-sliders"></i>
                                    <span>Filters</span>
                                </button>
                            </div>
                            <!-- .handheld-sidebar-toggle -->
                            <h1 class="woocommerce-products-header__title page-title">Arama Sonuclari</h1>
                            <ul role="tablist" class="shop-view-switcher nav nav-tabs">
                                <li class="nav-item">
                                    <a href="#list-view" title="List View" data-toggle="tab" class="nav-link active">
                                        <i class="tm tm-grid-small"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- .shop-view-switcher -->
                            <form class="form-techmarket-wc-ppp" method="POST">
                                <select class="techmarket-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp">
                                    <option value="20">Show 20</option>
                                    <option value="40">Show 40</option>
                                    <option value="-1">Show All</option>
                                </select>
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

                            <div id="list-view" class="tab-pane active" role="tabpanel">
                                <div class="woocommerce columns-1">
                                    <div class="products">
                                        @foreach($urunler as $urun)
                                        <div class="product list-view ">
                                            <div class="media">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="https://via.placeholder.com/224x197">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Favorilare Ekle</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{ route('urun', $urun->slug) }}">
                                                            <h2 class="woocommerce-loop-product__title">{{ $urun-> urun_adi }}</h2>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            {{ $urun-> aciklama }}
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                        <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol"></span>{{ $urun-> fiyati }} ₺</span>
                                                                </span>
                                                        <!-- .price -->
                                                        <a class="button add_to_cart_button" href="cart.html">Sepete Ekle</a>

                                                    </div>
                                                    <!-- .product-actions -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .product -->
                                        @endforeach
                                    </div>
                                    <!-- .products -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .tab-pane -->

                        </div>
                        <!-- .tab-content -->
                        <div class="shop-control-bar-bottom">
                            <form class="form-techmarket-wc-ppp" method="POST">
                                <select class="techmarket-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp">
                                    <option value="20">Show 20</option>
                                    <option value="40">Show 40</option>
                                    <option value="-1">Show All</option>
                                </select>
                                <input type="hidden" value="5" name="shop_columns">
                                <input type="hidden" value="15" name="shop_per_page">
                                <input type="hidden" value="right-sidebar" name="shop_layout">
                            </form>
                            <!-- .form-techmarket-wc-ppp -->
                            <p class="woocommerce-result-count">
                                Showing 1&ndash;15 of 73 results
                            </p>
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
            </div>
            <!-- .row -->
        </div>
        <!-- .col-full -->
    </div>
    <!-- #content -->
    @endsection