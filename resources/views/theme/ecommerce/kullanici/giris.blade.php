@extends('theme.ecommerce.layouts.master')
@section('title', 'Kayıt Ol')

@section('content')
    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{ route('anasayfa') }}">Anasayfa</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>Giris Yap
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="type-page hentry">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <div class="customer-login-form">
                                        <div class="col-12 ">
                                            <div class="col-md-8">
                                                <h2>Giris Yap</h2>
                                                @include('theme.ecommerce.layouts.partials.error')
                                                <form  method="POST" action=" {{ route('kullanici.giris') }} ">
                                                    {{ csrf_field() }}
                                                    <p class="before-register-text">
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_email">Email
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="email" value="" id="reg_email" name="email" class="woocommerce-Input woocommerce-Input--text input-text">
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_password">Parola
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="password" id="reg_password" name="sifre" class="woocommerce-Input woocommerce-Input--text input-text">
                                                    </p>
                                                    <p class="form-row">
                                                        <input type="submit" class="woocommerce-Button button" value="Giriş Yap" />
                                                    </p>

                                                </form>
                                                <!-- .register -->
                                            </div>
                                            <!-- .col-2 -->
                                        </div>
                                        <!-- .col2-set -->
                                    </div>
                                    <!-- .customer-login-form -->
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
@endsection