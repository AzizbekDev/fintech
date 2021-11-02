<!doctype html>
<html lang="en">
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>FinTech</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

</head>

<body>

<!--====== HEADER PART START ======-->
<header class="header-area">
    @include('partials.navigation')
    <div id="home" class="header-hero bg_cover" style="background-image: url({{url('images/header-bg.png')}})">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10">
                    <div class="header-content">
                        <h3 class="header-title">Farzandingiz kelajagini <br> biz bilan quring!</h3>
                        <div class="header-btn align-items-center">
                            <a href="#contact_us" class="btn page-scroll" type="button">Ro'yxatdan o'tish</a>
                        </div>
                    </div> <!-- header content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header content -->
</header>
<!--====== HEADER PART ENDS ======-->

    @yield('content')

<!--====== FOOTER PART START ======-->
    @include('partials.footer')
<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TO TOP PART START ======-->
<a class="back-to-top" href="#"><img class="right-chervon" src="{{ asset('images/right-chervon.png') }}" alt=">"></a>
<!--====== BACK TO TOP PART ENDS ======-->


<!--====== jquery js ======-->
<script src="{{ asset('js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>

<!--====== Bootstrap js ======-->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!--====== Scrolling Nav js ======-->
<script src="{{ asset('js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/scrolling-nav.js') }}"></script>

<!--====== Magnific Popup js ======-->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>

<!--====== Main js ======-->
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
