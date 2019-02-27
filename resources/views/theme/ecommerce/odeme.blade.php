@extends('theme.ecommerce.layouts.master')
@section('title', 'Ödeme')

@section('content')
    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{ route('anasayfa') }}">Anasayfa</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>
                    Checkout
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div class="content-area" id="primary">
                    <main class="site-main" id="main">
                        <div class="type-page hentry">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <form action="{{ route('odemeyap') }}" class="checkout woocommerce-checkout" method="post" name="checkout">
                                        <div id="customer_details" class="col2-set">
                                            <div class="col-1">
                                                <div class="woocommerce-billing-fields">
                                                    <h3>Fatura & Teslimat Bilgileri</h3>
                                                    <div class="woocommerce-billing-fields__field-wrapper-outer">
                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                            <p id="billing_first_name_field" class="form-row form-row-wide">
                                                                <label class="" for="billing_first_name">İsim
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="text" value="{{ auth()->user()->adsoyad }}" placeholder="" id="billing_first_name" name="isim" class="input-text ">
                                                            </p>
                                                            <div class="clear"></div>
                                                            <p id="billing_company_field" class="form-row form-row-wide">
                                                                <label class="" for="billing_company">Telefon</label>
                                                                <input type="text" value="{{ $kullanici_detay -> cep_telefonu  }}" placeholder="" id="billing_company" name="telefon" class="input-text ">
                                                            </p>
                                                            <div class="clear"></div>
                                                            <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                                <label class="" for="billing_address_1">Adres
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="text" value="{{ $kullanici_detay  -> adres }}" placeholder="Adres" id="billing_address_1" name="adres" class="input-text ">
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!-- .woocommerce-billing-fields__field-wrapper-outer -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col2-set -->
                                        <h3 id="order_review_heading">Sepet</h3>
                                        <div class="woocommerce-checkout-review-order" id="order_review">
                                            <div class="order-review-wrapper">
                                                <h3 class="order_review_heading">Sepet</h3>
                                                <table class="shop_table woocommerce-checkout-review-order-table">
                                                    <thead>
                                                    <tr>
                                                        <th class="product-name">Ürün</th>
                                                        <th class="product-total">Toplam</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach(Cart::content() as $urun)
                                                        <tr class="cart_item">
                                                            <td class="product-name">
                                                                <strong class="product-quantity">{{ $urun->qty }} ×</strong> {{ $urun -> name }}&nbsp;
                                                            </td>
                                                            <td class="product-total">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">£</span>{{ $urun->subtotal()}}</span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                    <tr class="cart-subtotal">
                                                        <th>Ara Toplam</th>
                                                        <td>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">{{ Cart::subtotal() }}</span>₺</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th>Toplam</th>
                                                        <td>
                                                            <strong>
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">{{ Cart::total() }}</span>₺</span>
                                                            </strong>
                                                        </td>
                                                    </tr>
                                                    </tfoot>
                                                </table>

                                                <!-- /.woocommerce-checkout-review-order-table -->
                                                <div class="woocommerce-checkout-payment" id="payment">

                                                    <div class="form-row place-order">
                                                        <p class="form-row terms wc-terms-and-conditions woocommerce-validated">
                                                            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                                <input type="checkbox" id="terms" name="terms" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox">
                                                                <span>I’ve read and accept the <a class="woocommerce-terms-and-conditions-link" href="terms-and-conditions.html">terms &amp; conditions</a></span>
                                                                <span class="required">*</span>
                                                            </label>
                                                            <input type="hidden" value="1" name="terms-field">
                                                        </p>
                                                        <a href="order-received.html" class="button wc-forward text-center">Ödemeyi Tamamla</a>
                                                    </div>
                                                </div>
                                                <!-- /.woocommerce-checkout-payment -->
                                            </div>
                                            <!-- /.order-review-wrapper -->
                                        </div>
                                        <!-- .woocommerce-checkout-review-order -->

                                        <div id="customer_details" class="col2-set">
                                            <div class="col-1">
                                                <div class="woocommerce-billing-fields">
                                                    <h3>Ödeme Bilgisi</h3>
                                                    <div class="woocommerce-billing-fields__field-wrapper-outer">
                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                            <p id="billing_first_name_field" class="form-row form-row-wide  validate-required woocommerce-invalid woocommerce-invalid-required-field">
                                                                <label class="" >Kredi Kartı Numarası
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="text" id="cc" name="kart_numarasi" class="input-text" data-inputmask="'mask': '9999 9999 9999 9999'" >
                                                            </p>
                                                            <div class="clear"></div>
                                                            <p id="billing_country_field" class="form-row form-row-first validate-required validate-email">
                                                                <label class="" for="billing_country">Son Kullanma Tarihi (Ay)
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <select autocomplete="country" class="select2-hidden-accessible" id="billing_country" name="son_kullanma_tarihi_ay" tabindex="-1" aria-hidden="true">
                                                                    <option value="">Ay</option>
                                                                    <option value="01">1</option>
                                                                    <option value="02">2</option>
                                                                    <option value="03">3</option>
                                                                    <option value="04">4</option>
                                                                    <option value="05">5</option>
                                                                    <option value="06">6</option>
                                                                    <option value="07">7</option>
                                                                    <option value="08">8</option>
                                                                    <option value="09">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                </select>

                                                            </p>

                                                            <p id="billing_country_field" class="form-row form-row-first validate-required validate-email">
                                                                <label class="" for="billing_country">Son Kullanma Tarihi (Yıl)
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <select autocomplete="country" class="select2-hidden-accessible" id="billing_country" name="son_kullanma_tarihi_yil" tabindex="-1" aria-hidden="true">
                                                                    <option value="">Yıl</option>
                                                                    <option value="01">2019</option>
                                                                    <option value="02">2020</option>
                                                                    <option value="03">2021</option>
                                                                    <option value="04">2022</option>
                                                                    <option value="05">2023</option>
                                                                    <option value="06">2024</option>
                                                                    <option value="07">2025</option>
                                                                </select>
                                                            </p>

                                                            <div class="clear"></div>

                                                            <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                                <label class="" for="billing_address_1">CCV (Güvenlik Kodu)
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="text" value="" data-inputmask="'mask': '999'" class="input-text" name="ccv">
                                                            </p>

                                                      </div>
                                                    </div>
                                                    <!-- .woocommerce-billing-fields__field-wrapper-outer -->
                                                </div>
                                                <!-- .woocommerce-billing-fields -->
                                                <div class="woocommerce-account-fields">

                                                </div>
                                                <!-- .woocommerce-account-fields -->
                                            </div>
                                            <!-- .col-1 -->

                                        </div>
                                    </form>
                                    <!-- .woocommerce-checkout -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .entry-content -->
                        </div>
                        <!-- #post-## -->
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


@section('footer')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
    <script>
        $(":input").inputmask();
    </script>
    @endsection