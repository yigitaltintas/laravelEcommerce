@extends('theme.ecommerce.layouts.master')
@section('title', $urun -> urun_adi)
@section('body', 'woocommerce-active single-product full-width normal')
@section('content')

<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <div class="row">
            <nav class="woocommerce-breadcrumb">
                <a href="{{ route('anasayfa') }}">Anasayfa</a>

                @foreach($kategoriler as $kategori)
                    <span class="delimiter">
                        <i class="tm tm-breadcrumbs-arrow-right"></i>
                    </span>
                    <a href="{{ route('kategori', $kategori -> slug )}}"> {{ $kategori -> kategori_adi }} </a>
                @endforeach
                <span class="delimiter">
                    <i class="tm tm-breadcrumbs-arrow-right"></i>
                </span>{{ $urun -> urun_adi }}
            </nav>
            <!-- .woocommerce-breadcrumb -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="product product-type-simple">
                        <div class="single-product-wrapper">
                            <div class="product-images-wrapper thumb-count-4">
                                <!-- .onsale -->
                                <div id="techmarket-single-product-gallery" class="techmarket-single-product-gallery techmarket-single-product-gallery--with-images techmarket-single-product-gallery--columns-4 images" data-columns="4">
                                    <div class="techmarket-single-product-gallery-images" data-ride="tm-slick-carousel" data-wrap=".woocommerce-product-gallery__wrapper" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .techmarket-single-product-gallery-thumbnails__wrapper&quot;}">
                                        <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">
                                            <a href="#" class="woocommerce-product-gallery__trigger">🔍</a>
                                            <figure class="woocommerce-product-gallery__wrapper ">
                                                <div data-thumb="assets/images/products/sm-card-1.jpg" class="woocommerce-product-gallery__image">
                                                    <a href="http://via.placeholder.com/600x600" tabindex="0">
                                                        <img width="600" height="600" src="http://via.placeholder.com/600x600" class="attachment-shop_single size-shop_single wp-post-image" alt="">
                                                    </a>
                                                </div>
                                                <div data-thumb="assets/images/products/sm-card-1.jpg" class="woocommerce-product-gallery__image">
                                                    <a href="http://via.placeholder.com/600x600" tabindex="0">
                                                        <img width="600" height="600" src="http://via.placeholder.com/600x600" class="attachment-shop_single size-shop_single wp-post-image" alt="">
                                                    </a>
                                                </div>
                                                <div data-thumb="assets/images/products/sm-card-1.jpg" class="woocommerce-product-gallery__image">
                                                    <a href="http://via.placeholder.com/600x600" tabindex="0">
                                                        <img width="600" height="600" src="http://via.placeholder.com/600x600" class="attachment-shop_single size-shop_single wp-post-image" alt="">
                                                    </a>
                                                </div>
                                                <div data-thumb="assets/images/products/sm-card-1.jpg" class="woocommerce-product-gallery__image">
                                                    <a href="http://via.placeholder.com/600x600" tabindex="0">
                                                        <img width="600" height="600" src="http://via.placeholder.com/600x600" class="attachment-shop_single size-shop_single wp-post-image" alt="">
                                                    </a>
                                                </div>

                                            </figure>
                                        </div>
                                        <!-- .woocommerce-product-gallery -->
                                    </div>
                                    <!-- .techmarket-single-product-gallery-images -->
                                    <div class="techmarket-single-product-gallery-thumbnails" data-ride="tm-slick-carousel" data-wrap=".techmarket-single-product-gallery-thumbnails__wrapper" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;vertical&quot;:true,&quot;verticalSwiping&quot;:true,&quot;focusOnSelect&quot;:true,&quot;touchMove&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-up\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-down\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .woocommerce-product-gallery__wrapper&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:765,&quot;settings&quot;:{&quot;vertical&quot;:false,&quot;horizontal&quot;:true,&quot;verticalSwiping&quot;:false,&quot;slidesToShow&quot;:4}}]}">
                                        <figure class="techmarket-single-product-gallery-thumbnails__wrapper">
                                            <figure data-thumb="http://via.placeholder.com/200x200?text=urunResim" class="techmarket-wc-product-gallery__image">
                                                <img width="180" height="180" src="http://via.placeholder.com/200x200?text=urunResim" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
                                            </figure>
                                            <figure data-thumb="http://via.placeholder.com/200x200?text=urunResim" class="techmarket-wc-product-gallery__image">
                                                <img width="180" height="180" src="http://via.placeholder.com/200x200?text=urunResim" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
                                            </figure>
                                            <figure data-thumb="http://via.placeholder.com/200x200?text=urunResim" class="techmarket-wc-product-gallery__image">
                                                <img width="180" height="180" src="http://via.placeholder.com/200x200?text=urunResim" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
                                            </figure>
                                            <figure data-thumb="http://via.placeholder.com/200x200?text=urunResim" class="techmarket-wc-product-gallery__image">
                                                <img width="180" height="180" src="http://via.placeholder.com/200x200?text=urunResim" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
                                            </figure>
                                        </figure>
                                        <!-- .techmarket-single-product-gallery-thumbnails__wrapper -->
                                    </div>
                                    <!-- .techmarket-single-product-gallery-thumbnails -->
                                </div>
                                <!-- .techmarket-single-product-gallery -->
                            </div>
                            <!-- .product-images-wrapper -->
                            <div class="summary entry-summary">
                                <div class="single-product-header">
                                    <h1 class="product_title entry-title">{{ $urun -> urun_adi }}</h1>
                                    <a class="add-to-wishlist" href="wishlist.html"> Favorilerine Ekle</a>
                                </div>
                                <!-- .single-product-header -->
                                <div class="single-product-meta">
                                    <div class="cat-and-sku">
                                                    <span class="posted_in categories">
                                                        <a rel="tag" href="product-category.html">TV &amp; Video</a>
                                                    </span>
                                        <span class="sku_wrapper">SKU:
                                                        <span class="sku">5487FB8/11</span>
                                                    </span>
                                    </div>

                                </div>
                                <!-- .single-product-meta -->
                                <div class="rating-and-sharing-wrapper">
                                    <div class="woocommerce-product-rating">
                                        <div class="star-rating">
                                                        <span style="width:100%">Rated
                                                            <strong class="rating">5.00</strong> out of 5 based on
                                                            <span class="rating">1</span> yorum</span>
                                        </div>
                                        <a rel="nofollow" class="woocommerce-review-link" href="#reviews">(<span class="count">1</span> customer review)</a>
                                    </div>
                                </div>
                                <!-- .rating-and-sharing-wrapper -->
                                <div class="woocommerce-product-details__short-description">
                                    {{ $urun -> aciklama }}
                                </div>
                                <!-- .woocommerce-product-details__short-description -->
                                <div class="product-actions-wrapper">
                                    <div class="product-actions">
                                        <p class="price">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">₺</span>{{ $urun -> fiyati }}</span>
                                            </ins>
                                        </p>
                                        <!-- .single-product-header -->
                                        <form enctype="multipart/form-data" method="post" class="cart" action="{{ route('sepet.ekle') }}">
                                            {{ csrf_field() }}
                                            <div class="quantity">
                                                <label for="quantity-input">Adet</label>
                                                <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="adet" id="quantity-input">
                                                <input type="hidden" name="id" value="{{ $urun->id }}">
                                            </div>
                                            <!-- .quantity -->
                                            <button class="single_add_to_cart_button button alt" value="185" name="add-to-cart" type="submit">Sepete Ekle</button>
                                        </form>
                                        <!-- .cart -->
                                    </div>
                                    <!-- .product-actions -->
                                </div>
                                <!-- .product-actions-wrapper -->
                            </div>
                            <!-- .entry-summary -->
                        </div>
                        <!-- .single-product-wrapper -->

                        <!-- .tm-related-products-carousel -->
                        <div class="woocommerce-tabs wc-tabs-wrapper">
                            <ul role="tablist" class="nav tabs wc-tabs">
                                <li class="nav-item description_tab">
                                    <a class="nav-link" data-toggle="tab" role="tab" aria-controls="tab-description" href="#tab-description">Ürün Açıklaması</a>
                                </li>
                                <li class="nav-item reviews_tab">
                                    <a class="nav-link" data-toggle="tab" role="tab" aria-controls="tab-reviews" href="#tab-reviews">Yorumlar (1)</a>
                                </li>
                            </ul>
                            <!-- /.ec-tabs -->
                            <div class="tab-content">
                                <div class="tab-pane panel wc-tab active" id="tab-description" role="tabpanel">
                                    <h2>Açıklama</h2>

                                    {{ $urun -> aciklama }}
                                    <!-- .outer-wrap -->
                                </div>
                                <div class="tab-pane" id="tab-reviews" role="tabpanel">
                                    <div class="techmarket-advanced-reviews" id="reviews">
                                        <div class="advanced-review row">
                                            <div class="advanced-review-rating">
                                                <h2 class="based-title">Review (1)</h2>
                                                <div class="avg-rating">
                                                    <span class="avg-rating-number">5.0</span>
                                                    <div title="Rated 5.0 out of 5" class="star-rating">
                                                        <span style="width:100%"></span>
                                                    </div>
                                                </div>
                                                <!-- /.avg-rating -->
                                                <div class="rating-histogram">
                                                    <div class="rating-bar">
                                                        <div title="Rated 5 out of 5" class="star-rating">
                                                            <span style="width:100%"></span>
                                                        </div>
                                                        <div class="rating-count">1</div>
                                                        <div class="rating-percentage-bar">
                                                            <span class="rating-percentage" style="width:100%"></span>
                                                        </div>
                                                    </div>
                                                    <div class="rating-bar">
                                                        <div title="Rated 4 out of 5" class="star-rating">
                                                            <span style="width:80%"></span>
                                                        </div>
                                                        <div class="rating-count zero">0</div>
                                                        <div class="rating-percentage-bar">
                                                            <span class="rating-percentage" style="width:0%"></span>
                                                        </div>
                                                    </div>
                                                    <div class="rating-bar">
                                                        <div title="Rated 3 out of 5" class="star-rating">
                                                            <span style="width:60%"></span>
                                                        </div>
                                                        <div class="rating-count zero">0</div>
                                                        <div class="rating-percentage-bar">
                                                            <span class="rating-percentage" style="width:0%"></span>
                                                        </div>
                                                    </div>
                                                    <div class="rating-bar">
                                                        <div title="Rated 2 out of 5" class="star-rating">
                                                            <span style="width:40%"></span>
                                                        </div>
                                                        <div class="rating-count zero">0</div>
                                                        <div class="rating-percentage-bar">
                                                            <span class="rating-percentage" style="width:0%"></span>
                                                        </div>
                                                    </div>
                                                    <div class="rating-bar">
                                                        <div title="Rated 1 out of 5" class="star-rating">
                                                            <span style="width:20%"></span>
                                                        </div>
                                                        <div class="rating-count zero">0</div>
                                                        <div class="rating-percentage-bar">
                                                            <span class="rating-percentage" style="width:0%"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.rating-histogram -->
                                            </div>
                                            <!-- /.advanced-review-rating -->
                                            <div class="advanced-review-comment">
                                                <div id="review_form_wrapper">
                                                    <div id="review_form">
                                                        <div class="comment-respond" id="respond">
                                                            <h3 class="comment-reply-title" id="reply-title">Add a review</h3>
                                                            <form novalidate="" class="comment-form" id="commentform" method="post" action="#">
                                                                <div class="comment-form-rating">
                                                                    <label>Your Rating</label>
                                                                    <p class="stars">
                                                                        <span><a href="#" class="star-1">1</a><a href="#" class="star-2">2</a><a href="#" class="star-3">3</a><a href="#" class="star-4">4</a><a href="#" class="star-5">5</a></span>
                                                                    </p>
                                                                </div>
                                                                <p class="comment-form-comment">
                                                                    <label for="comment">Your Review</label>
                                                                    <textarea aria-required="true" rows="8" cols="45" name="comment" id="comment"></textarea>
                                                                </p>
                                                                <p class="comment-form-author">
                                                                    <label for="author">Name
                                                                        <span class="required">*</span>
                                                                    </label>
                                                                    <input type="text" aria-required="true" size="30" value="" name="author" id="author">
                                                                </p>
                                                                <p class="comment-form-email">
                                                                    <label for="email">Email
                                                                        <span class="required">*</span>
                                                                    </label>
                                                                    <input type="text" aria-required="true" size="30" value="" name="email" id="email">
                                                                </p>
                                                                <p class="form-submit">
                                                                    <input type="submit" value="Add Review" class="submit" id="submit" name="submit">
                                                                    <input type="hidden" id="comment_post_ID" value="185" name="comment_post_ID">
                                                                    <input type="hidden" value="0" id="comment_parent" name="comment_parent">
                                                                </p>
                                                            </form>
                                                            <!-- /.comment-form -->
                                                        </div>
                                                        <!-- /.comment-respond -->
                                                    </div>
                                                    <!-- /#review_form -->
                                                </div>
                                                <!-- /#review_form_wrapper -->
                                            </div>
                                            <!-- /.advanced-review-comment -->
                                        </div>
                                        <!-- /.advanced-review -->
                                        <div id="comments">
                                            <ol class="commentlist">
                                                <li id="li-comment-83" class="comment byuser comment-author-admin bypostauthor even thread-even depth-1">
                                                    <div class="comment_container" id="comment-83">
                                                        <div class="comment-text">
                                                            <div class="star-rating">
                                                                            <span style="width:100%">Rated
                                                                                <strong class="rating">5</strong> out of 5</span>
                                                            </div>
                                                            <p class="meta">
                                                                <strong itemprop="author" class="woocommerce-review__author">first last</strong>
                                                                <span class="woocommerce-review__dash">&ndash;</span>
                                                                <time datetime="2017-06-21T08:05:40+00:00" itemprop="datePublished" class="woocommerce-review__published-date">June 21, 2017</time>
                                                            </p>
                                                            <div class="description">
                                                                <p>Wow great product</p>
                                                            </div>
                                                            <!-- /.description -->
                                                        </div>
                                                        <!-- /.comment-text -->
                                                    </div>
                                                    <!-- /.comment_container -->
                                                </li>
                                                <!-- /.comment -->
                                            </ol>
                                            <!-- /.commentlist -->
                                        </div>
                                        <!-- /#comments -->
                                    </div>
                                    <!-- /.techmarket-advanced-reviews -->
                                </div>
                            </div>
                        </div>
                        <section class="section-landscape-products-carousel recently-viewed" id="recently-viewed">
                            <header class="section-header">
                                <h2 class="section-title">Diğer Ürünler</h2>
                                <nav class="custom-slick-nav"></nav>
                            </header>
                            <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:2,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#recently-viewed .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                <div class="container-fluid">
                                    <div class="woocommerce columns-5">
                                        <div class="products">
                                            <div class="landscape-product product">
                                                <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                    <div class="media">
                                                        <img class="wp-post-image" src="assets/images/products/card-6.jpg" alt="">
                                                        <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> $600</span>
                                                                        </span>
                                                            <!-- .price -->
                                                            <h2 class="woocommerce-loop-product__title">ZenBook 3 Ultrabook 8GB 512SSD W10</h2>
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
                                            <!-- .landscape-product -->
                                            <div class="landscape-product product">
                                                <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                    <div class="media">
                                                        <img class="wp-post-image" src="assets/images/products/card-3.jpg" alt="">
                                                        <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> $3,788.00</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">$4,780.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                            <!-- .price -->
                                                            <h2 class="woocommerce-loop-product__title">PowerBank 4400</h2>
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
                                            <!-- .landscape-product -->
                                            <div class="landscape-product product">
                                                <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                    <div class="media">
                                                        <img class="wp-post-image" src="assets/images/products/card-4.jpg" alt="">
                                                        <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> $800</span>
                                                                        </span>
                                                            <!-- .price -->
                                                            <h2 class="woocommerce-loop-product__title">Snap White Instant Digital Camera in White</h2>
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
                                            <!-- .landscape-product -->
                                            <div class="landscape-product product">
                                                <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                    <div class="media">
                                                        <img class="wp-post-image" src="assets/images/products/card-5.jpg" alt="">
                                                        <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> $3,788.00</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">$4,780.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                            <!-- .price -->
                                                            <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
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
                                            <!-- .landscape-product -->
                                            <div class="landscape-product product">
                                                <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                    <div class="media">
                                                        <img class="wp-post-image" src="assets/images/products/card-3.jpg" alt="">
                                                        <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> $3,788.00</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">$4,780.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                            <!-- .price -->
                                                            <h2 class="woocommerce-loop-product__title">PowerBank 4400</h2>
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
                                            <!-- .landscape-product -->
                                            <div class="landscape-product product">
                                                <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                    <div class="media">
                                                        <img class="wp-post-image" src="assets/images/products/card-2.jpg" alt="">
                                                        <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> $500</span>
                                                                        </span>
                                                            <!-- .price -->
                                                            <h2 class="woocommerce-loop-product__title">Headset 3D Glasses VR for Android</h2>
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
                                            <!-- .landscape-product -->
                                            <div class="landscape-product product">
                                                <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                    <div class="media">
                                                        <img class="wp-post-image" src="assets/images/products/card-4.jpg" alt="">
                                                        <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> $800</span>
                                                                        </span>
                                                            <!-- .price -->
                                                            <h2 class="woocommerce-loop-product__title">Snap White Instant Digital Camera in White</h2>
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
                                            <!-- .landscape-product -->
                                            <div class="landscape-product product">
                                                <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                    <div class="media">
                                                        <img class="wp-post-image" src="assets/images/products/card-1.jpg" alt="">
                                                        <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> $3,788.00</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">$4,780.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                            <!-- .price -->
                                                            <h2 class="woocommerce-loop-product__title">Unlocked Android 6″ Inch 4.4.2 Dual Core</h2>
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
                                            <!-- .landscape-product -->
                                        </div>
                                    </div>
                                    <!-- .woocommerce -->
                                </div>
                                <!-- .container-fluid -->
                            </div>
                            <!-- .products-carousel -->
                        </section>
                        <!-- .section-landscape-products-carousel -->
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
                    <!-- .product -->
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