<!DOCTYPE html>
<html lang="{{ config('app.locale')  }}" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
    <meta charset="UTF-8">
    <title>@yield('title',config('app.name'))</title>
    @include('theme.ecommerce.layouts.partials.head')
    @yield('head')
</head>
<body class="@yield('body', 'woocommerce-active page-template-template-homepage-v11')">
<div id="page" class="hfeed site">
    @include('theme.ecommerce.layouts.partials.navbar')

    @yield('content')

    @include('theme.ecommerce.layouts.partials.footer')

    @yield('footer')
</body>
</html>